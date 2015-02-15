<div class="col-md-3">
<?php 
	$logged_in = $this->session->userdata('logged_in');
	$user_type = $this->session->userdata('user_type');
        $the_details = NULL;

	$dates= date('F j,Y');

	echo '<link rel="stylesheet" type="text/css" href="css.css">
		';
	echo "
	<div id=\"meminfo\">

	<!-- DATE THING -->
		<div id=\"datething\" class=\"clearfix\">
		<table id = \"datetable\" class = \"clearfix\">
		<tr>";
	echo "<p>";
	echo $dates;
	echo '</p>
	</tr>
	</table>
	</div>
	';

	if (isset($logged_in)) {	
		echo "
                    <div id=\"info\">
		<table>
		<table class =\"infotable\">
		<th>Your Information</th>
		<tr>
			<td>" . $the_details[0]['fname'] ."  ".$the_details[0]['sname']." ".$the_details[0]['onames']."</td>
		</tr>
		<tr>
			<td>" . $the_details[0]['email'] . "</td>
		</tr>
		<tr>
			<td>" . $the_details[0]['phone_no'] . "</td>
		</tr>
		<tr>
			<td><a href= \"memberprofile.php\">Your Profile</a></td>
		</tr>

		</table>
                </div>
	";
		

	if ($user_type == 1) {
	echo "<div id=\"fileupload\">
	<table class =\"infotable\">

		<tr>
		<td><p>View <a href = ".base_url().'admin/members'.">Member Database.</a></p><td>
		</tr>
		<tr>
		<td><p>View <a href = ".base_url().'admin/unnaproved'.">Unnaproved works.</a></p><td>
		</tr>
		<tr>
		<td><p>View <a href = ".base_url().'admin/trash'.">Trash.</a></p><td>
		</tr>
		<tr>
		<td><p>View <a href = ".base_url().'admin/requestreport'."> Requests</a></p><td>
		</tr>
		
		<tr>
		<td><p>View <a href = ".base_url().'admin/enquiries'.">Enquiries</a></p><td>
		</tr>

		<tr>
		<td><p>View <a href = ".base_url().'admin/logs_report'."> Logs</a></p><td>
		</tr>
		<tr>
		 <td><p>Upload a <a href = ".base_url().'admin/file_upload'.">file.</a></p></td>
		</tr>
		<tr>
		<td><p>View your <a href = ".base_url().'admin/member_uploads'."> Uploads.</a></p><td>
		</tr>
			<tr>
		<td><p>View<a href = ".base_url().'admin/forum'."> Forum.</a></p><td>
		</tr>
			</table>
	</div>
	</div>";

	}
// MEMBER UPLOADS means the individual uploads of the user,only the logged in user,things they uploaded to the gallery
	else{
	echo "<div id=\"fileupload\">
	<table class =\"infotable\" class=\"clearfix\">
			<tr>
		<td><p>View<a href = \"forum.php\"> Forum.</a></p><td>
		</tr>
		<tr>
		 <td><p>Upload a <a href = ".base_url().'upload/file_upload'.">file.</a></p></td>
		</tr>
		<tr>
		<td><p>View your <a href = ".base_url().'upload/member_uploads'."> Uploads.</a></p><td>
		</tr>
		</table>
	</div>
	</div>
		";
	}

	}

	else{
	echo"
	<table class =\"infotable\" class=\"clearfix\">
		<tr>
		 <td><p> You seem not to be a member,why dont you <a href = ".base_url().'login/registration'.">Join Us</a> and be  part of our society?</p></td>
		</tr>
		</table>
	</div>
		
	</div>

	";


		}

 ?>
</div>