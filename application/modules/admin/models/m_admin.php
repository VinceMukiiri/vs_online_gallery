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

	public function get_member_db($status = NULL,$member_id = NULL){
		// $tuner = (isset($status))?(($status == "active")?"WHERE active = 1":"WHERE active = '123' "):NULL;
		// echo $tuner;exit;
		$tuner = NULL;
		if(isset($status) && ($status != "NULL")):

			if($status == "active"):
				$tuner = "WHERE `active`= 1";
				$tuner = isset($member_id)?  $tuner." AND `member_id` = $member_id": $tuner;
			elseif($status == "inactive"):
				$tuner = "WHERE `active`= 0";
				$tuner = isset($member_id)?  $tuner." AND `member_id` = $member_id": $tuner;
			endif;//active-inactive setting

		else:
			$tuner = isset($member_id)?  $tuner." WHERE member_id = $member_id": NULL;
		endif;//status checking if

		// echo "This ".$tuner;exit;

		$query = $this->db->query("SELECT * FROM members $tuner");
		$result = $query ->result_array();
		return $result;
	}

	public function change_member_status($member_id = NULL,$action = NULL){
		if(isset($action)):
			if($action == "kill"):
				$tuner = "0";
			elseif($action == "revive"):
				$tuner = "1";
			endif;
		else:
			$tuner = "`active` + 0";
		endif;

			$query = $this->db->query("UPDATE `members` SET `active`= $tuner WHERE `member_id` = $member_id");
			// $result = $query->result_array();

			return $query;
		
	}

	public function artwork_approvals($selection = NULL){
		if(isset($selection)):
			if($selection == 1):
				$tuner = "AND a.status = 1";
			elseif($selection == 3):
				$tuner = "AND a.status = 2";
			elseif($selection == 2):
				$tuner = "AND a.status = 0";
			endif;
		else:
			$tuner = NULL;
		endif;

		$query = $this->db->query("
			SELECT a.art_id,
			a.title,
			a.description,
			a.file_name,
			a.file_type,
			a.group_id,
			a.uploader_user_id,
			a.upload_date,
			a.view_count,
			a.favorites,
			a.status,
			g.genre,
			m.member_id,
			m.email,
			m.phone_no,
			m.ppic_url,
			m.fname,
			m.sname,
			m.onames,
			m.active
			FROM art a,genres g,members m
			WHERE a.genre = g.genre_id
			AND m.user_id = a.uploader_user_id $tuner
			");
		$result = $query ->result_array();

		return $result;
	}

	public function approval_status($art_id = NULL,$alteration = NULL){
		if(isset($alteration)):
			if($alteration == 1):
				$tuner = "1";
			elseif($alteration == 2):
				$tuner = "0";//unnaproved
			elseif($alteration == 3):
				$tuner = "2";//trash
			endif;
		else:
			$tuner = "`active` + 0";
		endif;

			$query = $this->db->query("UPDATE `art` SET `status`= $tuner WHERE `art_id` = $art_id");
			// $result = $query->result_array();

			return $query;
		
	}

	public function get_logs($user_id = NULL){
		if(isset($user_id)):
			$tuner = " AND l.user_id = $user_id";
		else:
			$tuner = NULL;
		endif;

		$query = $this->db->query("
			SELECT m.member_id,
			m.user_id,
			m.national_id,
			m.DOB,
			m.gender,
			m.email,
			m.phone_no,
			m.ppic_url,
			m.fname,
			m.sname,
			m.onames,
			l.date_time AS last_login

			FROM members m,logs l

			WHERE m.user_id = l.user_id $tuner
			");
		$result = $query->result_array();
		return $result;
	}


}

 ?>