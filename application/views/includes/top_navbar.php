<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo site_url() ?>/homepage"><img src="<?php echo base_url() ?>/site_data/OnlineLearning.png" class="" style="width: 40%;"></a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
    <li >
        <a href="<?php echo site_url() ?>/upload"><i class="fa fa-upload"></i>  Upload</a>

    </li>


    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('full_name'); ?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="<?php echo site_url() ?>/homepage/profile"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>

            <li class="divider"></li>
            <li>
                <a href="<?php echo site_url() ?>/login/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
        </ul>
    </li>
</ul>