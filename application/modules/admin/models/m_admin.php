<?php 
class M_Admin extends MY_Model{

	function __construct()
	{
		parent:: __construct();
	}

	public function getdetails($id){
		$query = $this->db->query("SELECT * FROM members WHERE user_id = $id");
		$result = $query->result_array();

		return $result;
	}
}

 ?>