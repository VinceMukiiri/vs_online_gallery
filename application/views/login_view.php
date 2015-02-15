<div class="logo-wrapper-dark"><a href="<?php echo site_url() ?>"><img src="<?php echo base_url(); ?>_/img/logo-dark.png" alt="Multipurpose Twitter Bootstrap Template"></a></div>

<div class="container-fluid">
<div class="panel panel-default my-panel" id="login_form">

    <div class="panel-heading">
        <h1 class="panel-title"><i class="fa fa-user"></i> Login</h1>
    </div>

    <div class="panel-body">

        <?php
        echo form_open("login/validate_credentials", array(
            'role' => 'form',
            'class' => 'form-horizontal'
        ));
        ?>
        <div class="form-group">
            <?php
            echo form_label('Username: ', 'username', array(
                'class' => 'col-sm-2 control-label'
            ));
            ?>
            <div class="col-sm-10">
                <?php
                //username input
                echo form_input(array(
                    'class' => 'form-control',
                    'type' => 'text',
                    'name' => 'username',
                    'id' => 'username',
                    'placeholder' => 'Username',
                ));
                ?>
            </div>
        </div><!-- email -->

        <div class="form-group">
            <?php
            echo form_label('Password: ', 'password', array(
                'class' => 'col-sm-2 control-label'
            ));
            ?>
            <div class="col-sm-10">
                <?php
                //password input
                echo form_password(array(
                    'name' => 'password',
                    'id' => 'password',
                    'placeholder' => 'Password',
                    'class' => 'col-sm-10 form-control'
                ));
                ?>
            </div>
        </div><!-- password -->

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <?php
                echo form_button(array(
                    'type' => 'submit',
                    'name' => 'login',
                    'value' => 'Login',
                    'class' => 'btn btn-primary',
                    'content' => 'Login',
                ));
                ?>
                <a href="<?php echo site_url() ?>login/registration" class="btn bg-info">Sign Up</a>
            </div>

        </div><!-- login button -->
        <?php echo form_close(); ?><!--end form-->


        <?php
        if (isset($errmessage)) {
            echo '<div class="alert alert-danger">' . $errmessage . '</div>';
        }
        ?>
    </div><!--end panel body-->
</div><!--end panel-->

</div><!-- end container -->




