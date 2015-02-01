<?php

class Login extends CI_Controller {

    /**
     * Set to true when user enters a wrong username and password
     * @var bool
     */
    private $err;

    /**
     * The variables to be sent to the template view
     * @var array 
     */
    private $elements = array(
        'main_content' => '',
        'title' => '',
        /**
         *  A list of variables sent to the final view
         */
        'data' => array(),
        'user' => 'user',
    );

    /**
     * login page
     */
    function index() {
        if ($this->session->userdata('logged_in')) {

            redirect('/homepage');
        } else {
            $this->elements['main_content'] = 'login_view';
            $this->elements['title'] = 'User';

            if (isset($this->err)) {
                if ($this->err) {
                    $message = 'Wrong username & password combination!';
                    $this->elements['data']['errmessage'] = $message;
                }
            }
            $this->load->view('includes/template', $this->elements);
        }
    }

    /**
     * called to validate the credentials of the user
     */
    function validate_credentials() {
        $this->load->model('user_model');
        $user = new User_Model;
        $user->load_by_field($this->input->post('username'), 'username');
        FB::log($user);

        if ($user->user_id != '' &&
                $user->hashed_password == md5($this->input->post('password'))) {

            $this->session->set_userdata(array(
                'user_id' => $user->user_id,
                'logged_in' => true,
                'full_name' => $user->first_name . ' ' . $user->second_name,
            ));
//redirect to member homepage
        echo "<pre>";$this->session->all_userdata();echo "<pre>";exit;
            redirect('/homepage');
        } else {
            $this->err = TRUE;
            $this->index();
        }
    }

    function registration() {
        if ($this->input->post('submit')) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('photo')) {
                $this->elements['data']['error'] = $this->upload->display_errors();
            } else {
                $upload_data = $this->upload->data();
                $this->elements['data']['upload_data'] = $upload_data;
            }

            $this->load->model('user_model');
            $new_user = new User_Model;

            $new_user->username = $this->input->post('username');
            $new_user->hashed_password = md5($this->input->post('password'));
            $new_user->first_name = $this->input->post('firstname');
            $new_user->second_name = $this->input->post('secondname');
            $new_user->profile_picture = $upload_data['file_name'];
            $new_user->email = $this->input->post('email');

            $new_user->save();
        }

        $this->elements['main_content'] = 'registration_view';
        $this->load->view('includes/template', $this->elements);
    }

    function logout() {
        $this->session->set_userdata('logged_in', false);
        $this->index();
    }

    /**
     * admin dashboard with all the options
     */
    function dashboard() {
        switch ($this->uri->segment(3)) {
            //member management module
            case 'member_management':
                $this->load->model('member_model');
                $member = new Member_Model;
                $members = $member->get();

                switch ($this->uri->segment(4)) {
                    case 'edit_member':
                        $member->load($this->uri->segment(5));

                        $this->elements['main_content'] = 'admin/edit_member_view';
                        $this->elements['title'] = 'Edit Member';
                        $this->elements['data'] = array(
                            'member' => $member,
                        );

                        $this->load->view('includes/template', $this->elements);
                        break;

                    default :
                        $this->elements['main_content'] = 'admin/member_management_view';
                        $this->elements['title'] = 'Admin Member Management';
                        $this->elements['data'] = array(
                            'members' => $members,
                        );

                        $this->load->view('includes/template', $this->elements);
                        break;
                }
                break;

            //default dashboard
            default:
                $this->elements['main_content'] = 'admin/admin_dashboard_view';
                $this->elements['title'] = 'Admin Dashboard';
                $this->elements['main_content'] = 'admin/admin_dashboard_view';

                array(
                    'main_content' => 'admin/admin_dashboard_view',
                    'title' => 'Admin Dashboard',
                    'user' => 'admin',
                );
                $this->load->view('includes/template', $this->elements);
                break;
        }
    }

}
