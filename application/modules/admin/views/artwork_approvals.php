<?php //echo "<pre>";print_r($items);echo "</pre>";exit; ?>
<div id="members_table" class="col-md-6 clearfix">
<?php 
if ($sub_title == 1) {
	echo "<h3>Approved Works</h3>";
}elseif ($sub_title == 2) {
	echo "<h3>Unnapproved Works</h3>";
}elseif ($sub_title == 3) {
	echo "<h3>Trash/Discarded Works</h3>";
}else{
	echo "<h3>All Works</h3>";
}
 ?>
 	<h4>There are <?php echo $result_no; ?> results</h4>
 	<h5><a href="<?php echo base_url().'admin/work_approvals/1'; ?>">Approved</a></h5>
 	<h5><a href="<?php echo base_url().'admin/work_approvals/2'; ?>">Unnaproved</a></h5>
 	<h5><a href="<?php echo base_url().'admin/work_approvals/3'; ?>">Trash</a></h5>
	<table class="table table-responsive table-bordered">

		<thead>
		<th>Image</th>
			<th>Item ID</th>
			<th>Item Title</th>
			<th>Genre</th>
			<th>Description</th>
			<th>Member First Name</th>
			<th>Member Second Name</th>
			<th>Member Other Name</th>
			<th>Member Email</th>
			<th>Member Phone</th>
			<th colspan="2">Action</th>
		</thead>
		<tbody>
		<?php 
		foreach ($items as $item) {
			echo "
			<tr>
				<td class = \"scaled_img col-md-1\"><img src = ".base_url().'artwork/'.$item['file_name']."></td>
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
			echo "
			<td value = ".$item['art_id']."><a href=".base_url().'admin/approval_decision/'.$item['art_id'].'/2'.">Revoke Approval</a></td>";
			elseif($item['status'] == 0):
			echo "<td value = ".$item['art_id']."><a href=".base_url().'admin/approval_decision/'.$item['art_id'].'/1'.">Approve</a></td>
			<td value = ".$item['art_id']."><a href=".base_url().'admin/approval_decision/'.$item['art_id'].'/3'.">Discard</a></td>";
			elseif ($item['status'] == 2):
				echo "<td><i>This item has been discarded</i></td>";
			endif;
		}
		 ?>
		 </tr>
		</tbody>
	</table>
</div>