<div class="col-md-3 clearfix">
<?php 
	$logged_in = $this->session->userdata('logged_in');
	$user_type = $this->session->userdata('user_type');
	// $the_details = NULL;
	// echo "sth".$logged_in;
	$dates= date('F j,Y');
	?>

	<!-- <link rel="stylesheet" type="text/css" href="css.css"> -->
	<div id="meminfo">

	<!-- DATE THING -->
		<div id="datething" class="clearfix">
		<table id = "datetable" class = "clearfix">
		<tr><p>";
	<?php 
	echo date('F j,Y'); 

	?>
	</p>
	</tr>
	</table>
	</div>
	<div id="info">
<?php 
	if (isset($logged_in) && ($logged_in == 1)):
 ?>
		<?php if ($user_type == 1): ?>
			<?php echo $sidebar_options; ?>
		<?php else: ?>
		<div id="fileupload">
		<table class ="infotable" class="clearfix">
				<tr>
			<td><p>View<a href = "forum.php"> Forum.</a></p><td>
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

		<?php endif;//usertype if ?>
	<?php else: ?>
	<table class ="infotable" class="clearfix">
		<tr>
		 <td><p> You seem not to be a member,why dont you <a href = ".base_url().'login/registration'.">Join Us</a> and be  part of our society?</p></td>
		</tr>
		</table>
	</div>
		
	</div>
<?php endif; ?>

 ?>
</div>