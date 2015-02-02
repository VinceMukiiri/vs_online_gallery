<div class="">

	<table class="table table-bordered table-responsive width-auto">
	<!-- will be refined once all functionality is done -->
<?php 
foreach ($the_details as $details) {
	$url = $details['ppic_url'];
	echo "
	<tr>
	<tr>
	<td>
	<div id =\"ppic\"><img class=\"floats\" src = '$url'></div>
	</td>
	<td>
	<a href = \"updateinfo.php\">Update Information</a>
	</td>
	</tr>
	<div id=\"restoftable\">
	<tr>
	<th>Member_ID: </th>
	<td>" . $details['member_id'] . "</td>
	</tr>
	<tr>
	<th>First Name: </th>
	<td>" . $details['fname'] . "</td>
	</tr>
	<tr>
	<th>Second Name: </th>
	<td>" . $details['sname'] . "</td>
	</tr>
	<tr>
	<th>Other Names: </th>
	<td>" . $details['onames'] . "</td>
	</tr>
	<tr>
	<th>National ID/Passport: </th>
	<td>" . $details['national_id'] . "</td>
	</tr>
	<tr>
	<th>Date of Birth: </th>
	<td>" . $details['DOB'] . "</td>
	</tr>
	<tr>
	<th>Gender: </th>
	<td>" . $details['gender'] . "</td>
	</tr>
	<tr>
	<th>Email: </th>
	<td>" . $details['email'] . "</td>

	</tr>
	<tr>
	<th>Phone Number: </th>
	<td>" . $details['phone_no'] . "</td>
	</tr>
	</div>";
}
 ?>
 	 
	</table>
 </div>
