<?php

class Upload extends CI_Controller {

    private $elements = array(
        'main_content' => '',
        'title' => '',
        /**
         *  A list of variables sent to the final view
         */
        'data' => array(),
        'user' => 'user',
    );

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $this->elements['main_content'] = 'upload/upload_view';
        $this->elements['title'] = 'Upload';
        $this->load->view('includes/template', $this->elements);
    }

    function do_upload() {
        $config['upload_path'] = './site_data/content/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '10000';

        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('content_file')) {
            $this->elements['main_content'] = 'upload/upload_view';
            $this->elements['data']['error'] = $this->upload->display_errors();

            $this->load->view('includes/template', $this->elements);
        } else {
            $this->elements['main_content'] = 'upload/upload_details_view';
            $this->elements['data']['upload_data'] = $this->upload->data();

            $this->load->view('includes/template', $this->elements);
        }
    }

    function upload_details() {
        $this->load->model('content_model');

        $content = new Content_model();

        $content->title = $this->input->post('title');
        $content->description = $this->input->post('description');
        $content->file_name = $this->input->post('file_name');
        $content->file_type = $this->input->post('file_ext');
        $content->uploader_user_id = $this->session->userdata('user_id');
        $content->upload_date = time();
        
        $content->save();
        
        redirect('/homepage');
    }

}
