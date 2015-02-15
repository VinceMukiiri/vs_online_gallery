<?php

class Homepage extends CI_Controller {

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
        //these three lines are used to generate content by injecting the main content into the template view
        $this->elements['main_content'] = 'homepage_view';
        $this->elements['title'] = 'Home';

        $this->load->model('art_model');
        $temp_art = new Art_Model();
        $arts = $temp_art->get();

        $this->load->model('category_model');
        $category = new Category_Model();
        $categories = $category->get();
        $this->elements['data']['categories'] = $categories;

        $this->elements['data']['arts'] = $arts;
        $this->load->view('includes/template', $this->elements);
    }

}
