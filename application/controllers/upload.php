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
        $this->elements['main_content'] = 'upload_view';
        $this->elements['title'] = 'Upload';
        $this->load->view('includes/template', $this->elements);
    }

    function do_upload() {
        $config['upload_path'] = './artwork/';
        $config['allowed_types'] = 'jpg|';
        $config['max_size'] = '10000';

        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('content_file')) {
            $this->elements['main_content'] = 'upload_view';
            $this->elements['data']['error'] = $this->upload->display_errors();

            $this->load->view('includes/template', $this->elements);
        } else {
            $this->elements['main_content'] = 'upload_details_view';
            $this->elements['data']['upload_data'] = $this->upload->data();

            $this->load->view('includes/template', $this->elements);
        }
    }

    function upload_details() {
        $this->load->model('art_model');

        $art = new Art_model();

        $art->title = $this->input->post('title');
        $art->description = $this->input->post('description');
        $art->file_name = $this->input->post('file_name');
        $art->file_type = $this->input->post('file_ext');
        $art->uploader_user_id = $this->session->userdata('user_id');
        $art->upload_date = time();
        
        $art->save();
        
        redirect('/homepage');
    }

}
