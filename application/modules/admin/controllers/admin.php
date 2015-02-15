<?php

class Admin extends MY_Controller {

    function __construct() {
        parent::__construct();
        // echo md5(1234);exit;
        $this->load->model("m_admin");
    }

    public function index() {
        $id = $this->session->userdata('user_id');
        $details = m_admin::getdetails($id);
        // echo "<pre>This: ";print_r($details);echo "</pre>";exit;
        // echo base_url().'member_data/profile_pictures/4.jpg';exit;
        $this->elements['main_content'] = 'admin_home';
        $this->elements['title'] = 'Admin Home';
        $this->elements['the_details'] = $details;
        $this->load->view('includes/template', $this->elements);
    }

    public function member_database() {
        echo "SUCCESS";
    }

}

?>
