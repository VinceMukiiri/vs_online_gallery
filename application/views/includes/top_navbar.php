<div class="mainmenu-wrapper">
    <div class="container mainmenu-container">
        <div class="menuextras">
            <div class="extras">
                <ul>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>


                    <?php
                    if ($this->session->userdata('logged_in')):
                        ?>
                        <li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="#"><b>3 items</b></a></li>
                        <li>
                            <a href="<?php echo site_url() ?>/upload">Upload</a>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a class="#" data-toggle='dropdown' href="#">
                                    <?php echo $this->session->userdata('full_name') ?>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="menuitem"><a href="#">Profile</a></li>
                                    <li class="menuitem"><a href="<?php echo site_url() ?>/login/logout">Logout</a></li>
                                </ul>
                            </div>
                        </li>

                        <?php
                    else:
                        ?>
                        <li>
                            <a href="<?php echo site_url() ?>/login">Login</a>
                        </li>
                    <?php
                    endif;
                    ?>
                </ul>
            </div>
        </div>
        <nav id="mainmenu" class="mainmenu">
            <ul>
                <li class="logo-wrapper"><a href="index.html"><img src="<?php echo base_url(); ?>_/img/logo.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
                <li class="active">
                    <a href="index.html">Home</a>
                </li>
                <li class="has-submenu">
                    <a href="#">Explore <span class="fa fa-chevron-circle-down"></span></a>
                    <div class="mainmenu-submenu">
                        <div class="mainmenu-submenu-inner"> 
                            <div>
                                <ul>
                                    <li><a href="#">Most Viewed</a></li>
                                    <li><a href="#">Most Recent</a></li>
                                    <li><a href="#">Most Favorited</a></li>
                                </ul>

                            </div>
                        </div><!-- /mainmenu-submenu-inner -->
                    </div><!-- /mainmenu-submenu -->
                </li>
                <li>
                    <a href="credits.html">Shop</a>
                </li>
            </ul>
        </nav>
    </div>
</div>