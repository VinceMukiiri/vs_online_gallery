<?php
$this->load->model('user_model');
$user = new User_Model();

$user->load($this->session->userdata('user_id'));
?>
<div class="container">
    <div class="col-lg-6">
        <div class="thumbnail"><img src="<?php echo base_url() ?>site_data/profile_pictures/<?php echo $user->profile_picture ?>"></div>
    </div>
    <div class="col-lg-6">
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>
</div>

