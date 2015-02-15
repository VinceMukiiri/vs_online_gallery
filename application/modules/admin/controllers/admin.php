<?php 

class Admin extends MY_Controller{

	function __construct()
	{
		parent::__construct();
		// echo md5(1234);exit;
		$this->load->model("m_admin");
		
	}

	public function index(){
		$id = $this->session->userdata('user_id');
		$details = m_admin::getdetails($id);
		// echo "<pre>This: ";print_r($details);echo "</pre>";exit;
		// echo base_url().'member_data/profile_pictures/4.jpg';exit;
		$this->elements['main_content'] = 'admin_home';
		$this->elements['sidebar'] = 'admin_sidebar';
        $this->elements['title'] = 'Admin Home';
        $this->elements['the_details'] = $details;
        $this->load->view('includes/template', $this->elements);
	}

	public function member_database($filter = NULL,$member_id = NULL){
		// echo "SUCCESS";
		if($filter == "active"):
		$members = m_admin::get_member_db("active",$member_id);
		elseif($filter == "inactive"):
		$members = m_admin::get_member_db("inactive",$member_id);
		else:
			$filter == "all";
		$members = m_admin::get_member_db("all",$member_id);
		endif;

		// echo "<pre>This";print_r($members);echo "</pre>";exit;

		$this->elements['filter'] = $filter;
		$this->elements['result_no'] = count($members);
		$this->elements['main_content'] = 'member_db_view';
		$this->elements['sidebar'] = 'admin_sidebar';
        $this->elements['title'] = 'Admin Home';
        $this->elements['members'] = $members;
        $this->load->view('includes/template', $this->elements);
	}

	public function change_status($member_id = NULL,$action = NULL){
		$result = m_admin::change_member_status($member_id,$action);

		if ($action == "revive") {
		redirect(base_url().'admin/member_database/inactive');
		}else{
		redirect(base_url().'admin/member_database/active');
		}
	}

	public function work_approvals($selection = NULL){
		$chipo_chapo = m_admin::artwork_approvals($selection);//1 for approved,else for unnaproved

		// echo "<pre>This";print_r($chipo_chapo);echo "</pre>";exit;

		$this->elements['sub_title'] = $selection;
		$this->elements['result_no'] = count($chipo_chapo);
		$this->elements['main_content'] = 'artwork_approvals';
		$this->elements['sidebar'] = 'admin_sidebar';
        $this->elements['title'] = 'Approvals Admin';
        $this->elements['items'] = $chipo_chapo;
        $this->load->view('includes/template', $this->elements);
	}

	public function approval_decision($art_id = NULL , $alteration = NULL){
		$result = m_admin::approval_status($art_id,$alteration);

		if ($alteration == "1") {
		redirect(base_url().'admin/work_approvals/2');
		}else{
		redirect(base_url().'admin/work_approvals/1');
		}
	}

	public function member_logs(){
		$logs_ = m_admin::get_logs();

		// echo "<pre>This";print_r($logs_);echo "</pre>";exit;
		$this->elements['result_no'] = count($logs_);
		$this->elements['main_content'] = 'admin_logs_view';
		$this->elements['sidebar'] = 'admin_sidebar';
        $this->elements['title'] = 'Member Logs';
        $this->elements['logs'] = $logs_;
        $this->load->view('includes/template', $this->elements);
	}

	public function memberdetails($status = NULL,$member_id = NULL){
		$memberdetails = m_admin::get_member_db($status,$member_id);

		// echo "<pre>This";print_r($memberdetails);echo "</pre>";exit;
		// $this->elements['filter'] = $filter;
		// $this->elements['result_no'] = count($members);
		$this->elements['main_content'] = 'admin_member_details';
		$this->elements['sidebar'] = 'admin_sidebar';
        $this->elements['title'] = 'Admin |Member Details';
        $this->elements['members'] = $memberdetails;
        $this->load->view('includes/template', $this->elements);
	}

}
 ?>
