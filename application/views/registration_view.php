<div class="logo-wrapper-dark"><a href="<?php echo site_url() ?>"><img src="<?php echo base_url(); ?>_/img/logo-dark.png" alt="Multipurpose Twitter Bootstrap Template"></a></div>


<div id="wrapper">
    <div class="panel panel-default my-panel" style="width: 70%;">

        <div class="panel-heading">
            <h1 class="panel-title">Registration</h1>
        </div>

        <div class="panel-body">
            <div class="container-fluid">
                <?php
                $this->load->helper('date');
                echo form_open_multipart("login/registration", array(
                    'role' => 'form',
                    'class' => 'form-horizontal'
                ));
                ?>
                <div class="form-group">
                    <?php
                    echo form_label('Username: ', 'username', array(
                        'class' => 'col-sm-4 control-label'
                    ));
                    ?>
                    <div class="col-sm-6">
                        <?php
                        //password input
                        echo form_input(array(
                            'name' => 'username',
                            'id' => 'username',
                            'class' => 'col-sm-6 form-control',
                            'value' => '',
                        ));
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php
                    echo form_label('Password: ', 'password', array(
                        'class' => 'col-sm-4 control-label'
                    ));
                    ?>
                    <div class="col-sm-6">
                        <?php
                        //password input
                        echo form_password(array(
                            'name' => 'password',
                            'id' => 'password',
                            'class' => 'col-sm-6 form-control',
                            'value' => '',
                        ));
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php
                    echo form_label('Frist Name: ', 'firstname', array(
                        'class' => 'col-sm-4 control-label'
                    ));
                    ?>
                    <div class="col-sm-6">
                        <?php
                        //password input
                        echo form_input(array(
                            'name' => 'firstname',
                            'id' => 'firstname',
                            'class' => 'col-sm-6 form-control',
                            'value' => '',
                        ));
                        ?>
                    </div>
                </div>


                <div class="form-group">
                    <?php
                    echo form_label('Second Name: ', 'secondname', array(
                        'class' => 'col-sm-4 control-label'
                    ));
                    ?>
                    <div class="col-sm-6">
                        <?php
                        //password input
                        echo form_input(array(
                            'name' => 'secondname',
                            'id' => 'secondname',
                            'class' => 'col-sm-6 form-control',
                            'value' => '',
                        ));
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php
                    echo form_label('Email', 'email', array(
                        'class' => 'col-sm-4 control-label'
                    ));
                    ?>
                    <div class="col-sm-6">
                        <?php
                        //password input
                        echo form_input(array(
                            'name' => 'email',
                            'id' => 'email',
                            'class' => 'col-sm-6 form-control',
                            'value' => '',
                        ));
                        ?>
                    </div>
                </div>



                <div class="form-group">
                    <?php
                    echo form_label('Date Of Joining', 'date_of_joining', array(
                        'class' => 'col-sm-4 control-label'
                    ));
                    ?>
                    <div class="col-sm-6">
                        <?php
                        //password input
                        echo form_input(array(
                            'name' => 'date_of_joining',
                            'id' => 'date_of_joining',
                            'class' => 'col-sm-6 form-control',
                            'value' => mdate("%Y-%m-%d", time()),
                        ));
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php
                    echo form_label('Photo', 'photo', array(
                        'class' => 'col-sm-4 control-label'
                    ));
                    ?>
                    <div class="col-sm-6">
                        <?php
                        //password input
                        echo form_input(array(
                            'type' => 'file',
                            'name' => 'photo',
                            'id' => 'photo',
                            'class' => 'col-sm-6 form-control',
                            'value' => '',
                        ));
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-4">
                        <?php
                        echo form_button(array(
                            'type' => 'submit',
                            'name' => 'submit',
                            'value' => 'Register',
                            'class' => 'btn',
                            'content' => 'Register',
                        ));
                        ?>
                    </div>
                    <a href="<?php echo site_url() ?>login" class="btn">Back to login</a>

                </div>



                <?php echo form_close(); ?>

                <ul>

                </ul>

            </div>
        </div>
    </div>
</div>