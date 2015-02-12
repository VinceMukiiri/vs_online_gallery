<?php

class Explore extends CI_Controller {

    private $elements = array(
        'main_art' => '',
        'title' => '',
        /**
         *  A list of variables sent to the final view
         */
        'data' => array(),
        'user' => 'user',
    );

    function index() {
        $this->most_recent();
    }

    function most_recent() {
        $this->load->model('art_model');
        $art = new Art_Model();
        
        $arts = $art->get_by_timestamp();
        $this->elements['data']['arts'] = $arts;
        
        $this->elements['main_content'] = 'explore_art_view';
        
        $this->elements['data']['heading'] = 'Most Recent';
        $this->elements['title'] = 'Most Recent';
        $this->load->view('includes/template', $this->elements);
    }
    
    function most_viewed() {
        $this->load->model('art_model');
        $art = new Art_Model();
        
        $arts = $art->get_by_views();
        $this->elements['data']['arts'] = $arts;
        
        $this->elements['main_content'] = 'explore_art_view';
        $this->elements['data']['heading'] = 'Most Viewed';
        $this->elements['title'] = 'Most Viewed';
        $this->load->view('includes/template', $this->elements);
    }
    
    function view() {
        
        $this->load->model('comment_model');
        $comment = new Comment_Model();
        if($this->input->post('submit')) {
            $comment->comment_text = $this->input->post('comment');
            $comment->art_id = $this->input->get('c');
            $comment->date = time();
            $comment->user_id = $this->session->userdata('user_id');
            
            $comment->save();
        }
        $this->load->model('art_model');
        $art = new Art_Model();
        $art->load($this->input->get('c'));
        $art->AddView();
                
        $this->load->model('user_model');
        $uploader = new User_Model();
        $uploader->load($art->uploader_user_id);
        
        $comments = $comment->get_by_art($art->art_id);
        
        $this->elements['data']['art'] = $art;
        $this->elements['data']['uploader'] = $uploader;
        $this->elements['data']['comments'] = $comments;
        
        
        $this->elements['main_content'] = 'view_art_view';
        $this->elements['title'] = 'View';
        
        $this->load->view('includes/template', $this->elements);
    }
    
    

}
