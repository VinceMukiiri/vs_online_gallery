<div id="members_table" class="col-md-6 clearfix">

	<table class="table table-responsive table-bordered">

		<thead>
			<th>Profile Picture</th>
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
				<td class = \"scaled_img col-md-1\"><img src = ".$mem['ppic_url']."></td>
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