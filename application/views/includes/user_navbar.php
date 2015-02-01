<?php 
$this->load->model('user_model'); 
$current_user = new User_Model;
$current_user->load($this->session->userdata('user_id'));

?>

<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="<?php echo site_url() ?>/explore" class="dropdown-toggle" data-toggle="dropdown">Explore<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                <li><a tabindex="-1" href="<?php echo site_url() ?>/admin/dashboard/member_management">Most Recent</a></li>
                <li><a tabindex="-1" href="#">Categories</a></li>
                <li><a tabindex="-1" href="#">Top Rated</a></li>
                <li><a tabindex="-1" href="#">.........</a></li>
            </ul>
        </li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Upload</a></li>
        <li><a href="#">View Other Members</a></li>

    </ul>
    <div class="pull-right alert-info thumbnail" style="height: 100%;">You are logged in as <?php echo $current_user->first_name . ' ' . $current_user->second_name?></div>

</nav>

<!-- dropdown markup
<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Artists <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                <li><a tabindex="-1" href="artists.php">All artists</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="artists.php#Barot_Bellingham">Barot Bellingham</a></li>
                <li><a tabindex="-1" href="artists.php#Gerard_Donahue">Gerard Donahue</a></li>
                <li><a tabindex="-1" href="artists.php#Jonathan_Ferrar">Jonathan Ferrar</a></li>
                <li><a tabindex="-1" href="artists.php#Lorenzo_Garcia">Lorenzo Garcia</a></li>
                <li><a tabindex="-1" href="artists.php#Hillary_Goldwynn">Hillary Goldwynn</a></li>
                <li><a tabindex="-1" href="artists.php#Hassum_Harrod">Hassum Harrod</a></li>
                <li><a tabindex="-1" href="artists.php#Jennifer_Jerome">Jennifer Jerome</a></li>
                <li><a tabindex="-1" href="artists.php#LaVonne_LaRue">LaVonne LaRue</a></li>
                <li><a tabindex="-1" href="artists.php#Riley_Rewington">Riley Rewington</a></li>
                <li><a tabindex="-1" href="artists.php#Constance_Smith">Constance Smith</a></li>
                <li><a tabindex="-1" href="artists.php#Xhou_Ta">Xhou Ta</a></li>
                <li><a tabindex="-1" href="artists.php#Richard_Tweed">Richard Tweed</a></li>
            </ul>
        </li>

-->