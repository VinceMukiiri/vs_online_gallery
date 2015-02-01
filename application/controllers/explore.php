<?php

class Explore extends CI_Controller {

    private $elements = array(
        'main_content' => '',
        'title' => '',
        /**
         *  A list of variables sent to the final view
         */
        'data' => array(),
        'user' => 'user',
    );

    function index() {
        //most_recent();
    }

    function most_recent() {
        $this->load->model('content_model');
        $content = new Content_Model();
        
        $contents = $content->get_by_timestamp();
        $this->elements['data']['contents'] = $contents;
        
        $this->elements['main_content'] = 'explore_content_view';
        $this->elements['title'] = 'Explore';
        $this->load->view('includes/template', $this->elements);
    }
    
    function view() {
        
        $this->load->model('comment_model');
        $comment = new Comment_Model();
        if($this->input->post('submit')) {
            $comment->comment_text = $this->input->post('comment');
            $comment->content_id = $this->input->get('c');
            $comment->date = time();
            $comment->user_id = $this->session->userdata('user_id');
            
            $comment->save();
        }
        $this->load->model('content_model');
        $content = new Content_Model();
        $content->load($this->input->get('c'));
        $content->AddView();
                
        $this->load->model('user_model');
        $uploader = new User_Model();
        $uploader->load($content->uploader_user_id);
        
        $comments = $comment->get_by_content($content->content_id);
        
        $this->elements['data']['content'] = $content;
        $this->elements['data']['uploader'] = $uploader;
        $this->elements['data']['comments'] = $comments;
        
        
        $this->elements['main_content'] = 'view_content_view';
        $this->elements['title'] = 'View';
        
        $this->load->view('includes/template', $this->elements);
    }
    
    

}
