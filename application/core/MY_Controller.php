<?php 

class MY_Controller extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		// error_reporting(E_ALL);
	}	

	public function logout() {
        $this->session->set_userdata('logged_in', false);
        redirect(base_url().'login');
    }
}

 ?>