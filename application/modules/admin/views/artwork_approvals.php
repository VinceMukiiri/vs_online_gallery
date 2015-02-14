<div id="members_table" class="col-md-6 clearfix">
<?php 
if ($sub_title == 1) {
	echo "<h3>Approved Works</h3>";
}elseif ($sub_title == 2) {
	echo "<h3>Unaproved Works</h3>";
}else{
	echo "<h3>All Works</h3>";
}
 ?>
 	<h4>There are <?php echo $result_no; ?> results</h4>
 	<h5><a href="<?php echo base_url().'admin/work_approvals/1'; ?>">Approved</a></h5>
 	<h5><a href="<?php echo base_url().'admin/work_approvals/2'; ?>">Unnaproved</a></h5>
	<table class="table table-responsive table-bordered">

		<thead>
			<th>Item ID</th>
			<th>Item Title</th>
			<th>Genre</th>
			<th>Description</th>
			<th>Member First Name</th>
			<th>Member Second Name</th>
			<th>Member Other Name</th>
			<th>Member Email</th>
			<th>Member Phone</th>
			<th>Action</th>
		</thead>
		<tbody>
		<?php 
		foreach ($items as $item) {
			echo "
			<tr>
				<td>".$item['art_id']."</td>
				<td>".$item['title']."</td>
				<td>".$item['genre']."</td>
				<td>".$item['description']."</td>
				<td>".$item['fname']."</td>
				<td>".$item['sname']."</td>
				<td>".$item['onames']."</td>
				<td>".$item['email']."</td>
				<td>".$item['phone_no']."</td>
			";

			if($item['status'] == 1):
			echo "<td value = ".$item['art_id']."><a href=".base_url().'admin/approval_decision/'.$item['art_id'].'/2'.">Revoke Approval</a></td> </tr>";
			elseif($item['status'] == 0):
			echo "<td value = ".$item['art_id']."><a href=".base_url().'admin/approval_decision/'.$item['art_id'].'/1'.">Approve</a></td> </tr>";
			else:
			echo "</tr>";
			endif;
		}
		 ?>

		</tbody>
	</table>
</div>