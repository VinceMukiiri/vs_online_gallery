<?php 

class Admin extends MY_Controller{

	function __construct()
	{
		parent::__construct();
		echo md5(1234);exit;
		$this->load->model("m_admin");
	}

	public function index(){
		$id = $this->session('user_id');
		$details = m_admin::get_details($user_id);
		echo "<pre>";print_r($details);echo "</pre>";exit;
	}

}
 ?>
