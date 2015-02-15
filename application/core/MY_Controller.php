<?php

class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        // error_reporting(E_ALL);
    }

    public function logout() {
        $this->session->set_userdata('logged_in', false);
        $this->session->unset_userdata('cart');
        redirect(base_url() . 'homepage');
    }

}

?>