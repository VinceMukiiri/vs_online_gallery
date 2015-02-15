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
        $this->load->model('art_model');
        $art = new Art_Model();

        $this->load->model('category_model');
        $category = new Category_Model();
        $categories = $category->get();
        $this->elements['data']['categories'] = $categories;
        
        if($this->input->get('cat')) {
            $this->db->where('category_id', $this->input->get('cat'));
        }

        switch ($this->input->get('crit')) {
            case 'most_recent':
                $arts = $art->get_by_timestamp();
                $this->elements['data']['heading'] = 'Most Recent';
                $this->elements['title'] = 'Most Recent';
                break;

            case 'most_viewed':
                $arts = $art->get_by_views();
                $this->elements['data']['heading'] = 'Most Viewed';
                $this->elements['title'] = 'Most Viewed';
                break;

            case 'most_favorited':
                $arts = $art->get_by_favorites();
                $this->elements['data']['heading'] = 'Most Favorited';
                $this->elements['title'] = 'Most Favorites';
                break;

            default:
                $arts = $art->get_by_timestamp();
                $this->elements['data']['heading'] = 'Most Recent';
                $this->elements['title'] = 'Most Recent';
                break;
                break;
        }



        $this->elements['data']['arts'] = $arts;
        $this->elements['main_content'] = 'explore_art_view';
        $this->load->view('includes/template', $this->elements);
    }

    function most_viewed() {
        $this->load->model('art_model');
        $art = new Art_Model();

        $arts = $art->get_by_views();
        $this->elements['data']['heading'] = 'Most Viewed';
        $this->elements['title'] = 'Most Viewed';


        $this->elements['main_content'] = 'explore_art_view';
        $this->elements['data']['arts'] = $arts;
        $this->load->view('includes/template', $this->elements);
    }

    function most_favorites() {
        $this->load->model('art_model');
        $art = new Art_Model();

        $arts = $art->get_by_favorites();

        $this->elements['data']['heading'] = 'Most Favorited';
        $this->elements['title'] = 'Most Favorites';
        $this->elements['data']['arts'] = $arts;

        $this->elements['main_content'] = 'explore_art_view';
        $this->load->view('includes/template', $this->elements);
    }

}
