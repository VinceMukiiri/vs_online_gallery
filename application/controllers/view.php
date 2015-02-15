<?php

class View extends CI_Controller {

    function index() {
        $this->load->model('comment_model');
        $comment = new Comment_Model();
        if ($this->input->post('submit')) {
            $comment->comment_text = $this->input->post('comment');
            $comment->art_id = $this->input->get('art');
            $comment->date = time();
            $comment->user_id = $this->session->userdata('user_id');

            $comment->save();
        }
        
        $this->load->model('art_model');
        $art = new Art_Model();
        $art->load($this->input->get('art'));
        $art->AddView();

        $this->load->model('favorite_model');
        $favorite = new Favorite_Model();
        if ($this->input->get('fav') == 1) {
            echo "Yay favorite!";
            $favorite->art_id = $this->input->get('art');
            $favorite->user_id = $this->session->userdata('user_id');

            $favorite->save();
            $art->AddFavorite();
        }

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
    
    function add_to_cart() {
        echo "Added to cart";
        $art_id = $this->input->get('art');
        $qty = $this->input->get('qty');
        $cart = $this->session->userdata('cart');
        
        $exist = false;
        foreach ($cart as $item) {
            if($item == $art_id) $exist = true;
        }
        
        if(!$exist) {
        $cart[] = array($art_id, $qty);
        $this->session->set_userdata('cart', $cart);
        }
        
        print_r($this->session->userdata('cart'));
        
//        $this->session->userdata('logged_in'));
    }

}
