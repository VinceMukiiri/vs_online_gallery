<div id="members_table" class="col-md-6 clearfix">
<?php 
if ($filter == "active") {
	echo "<h3>Active Members</h3>";
}elseif ($filter == "inactive") {
	echo "<h3>Deactivated Members</h3>";
}else{
	echo "<h3>All Members</h3>";
}
 ?>
 	<h4>There are <?php echo $result_no; ?> results</h4>
 	<h5><a href="<?php echo base_url().'admin/member_database/inactive'?>">Inactive</a></h5>
 	<h5><a href="<?php echo base_url().'admin/member_database/active'?>">Active</a></h5>
 	<h5><a href="<?php echo base_url().'admin/member_database/all'?>">All</a></h5>
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
			<th>Action</th>
		</thead>
		<tbody>
		<?php 
		foreach ($members as $mem) {
			echo "
			<tr>
				<td>".$mem['member_id']."</td>
				<td>".$mem['national_id']."</td>
				<td>".$mem['fname']."</td>
				<td>".$mem['sname']."</td>
				<td>".$mem['onames']."</td>
				<td>".$mem['DOB']."</td>
				<td>".$mem['gender']."</td>
				<td>".$mem['phone_no']."</td>
				<td>".$mem['email']."</td>
			";
			if($mem['active'] == 1):
			echo "<td value = ".$mem['member_id']."><a href=".base_url().'admin/change_status/'.$mem['member_id'].'/kill'.">DEACTIVATE</a></td> </tr>";
			elseif($mem['active'] == 0):
			echo "<td value = ".$mem['member_id']."><a href=".base_url().'admin/change_status/'.$mem['member_id'].'/revive'.">ACTIVATE</a></td> </tr>";
			else:
			echo "</tr>";
			endif;
		}
		 ?>

		</tbody>
	</table>
</div>