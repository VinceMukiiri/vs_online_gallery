<?php

class Homepage extends CI_Controller {

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

    function index() {
        $this->elements['main_content'] = 'homepage_view';
        $this->elements['title'] = 'Home';

        $this->load->view('includes/template', $this->elements);
    }

    function profile() {
        $this->elements['main_content'] = 'profile_view';
        $this->elements['title'] = 'profile';

        $this->load->view('includes/template', $this->elements);
    }

}
