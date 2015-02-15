<div id="members_table" class="col-md-6 clearfix">
<h3>MEMBER LOGS</h3>
 	<h4>There are <?php echo $result_no; ?> results</h4>
	<table class="table table-responsive table-bordered">

		<thead>
			<th>Member ID</th>
			<th>National ID/Passport</th>
			<th>First Name</th>
			<th>Second Name</th>
			<th>Other Names</th>
			<th>Date of Birth</th>
			<th>Gender</th>
			<th>Phone No</th>
			<th>Email</th>
			<th>Last Seen</th>
			<th>Action</th>
		</thead>
		<tbody>
		<?php 
		foreach ($logs as $log) {
			echo "
			<tr>
				<td>".$log['member_id']."</td>
				<td>".$log['national_id']."</td>
				<td>".$log['fname']."</td>
				<td>".$log['sname']."</td>
				<td>".$log['onames']."</td>
				<td>".$log['DOB']."</td>
				<td>".$log['gender']."</td>
				<td>".$log['phone_no']."</td>
				<td>".$log['email']."</td>
				<td>".$log['last_login']."</td>
				<td><a href=".base_url().'admin/memberdetails/NULL/'.$log['member_id'].">Member Details</a></td>
			";
		}
		 ?>

		</tbody>
	</table>
</div>