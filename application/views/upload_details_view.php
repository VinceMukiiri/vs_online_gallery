<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Enter Art Details</h1>
            </div>
        </div>
    </div>
</div>



<div class="container">

    <div class="col-lg-6">
        <?php
        $this->load->helper('date');
        echo form_open_multipart("upload/upload_details", array(
            'role' => 'form',
            'class' => 'form-horizontal form-margin'
        ));
        ?>
        <div class="form-group">
            <?php
            echo form_label('Title: ', 'title', array(
                'class' => 'col-lg-3 control-label'
            ));
            ?>
            <div class="col-lg-9">
                <?php
                //password input
                echo form_input(array(
                    'name' => 'title',
                    'id' => 'title',
                    'class' => 'col-lg-9 form-control',
                    'value' => '',
                ));
                ?>
            </div>
        </div>

        <div class="form-group">
            <?php
            echo form_label('Description: ', 'description', array(
                'class' => 'col-lg-3 control-label'
            ));
            ?>
            <div class="col-lg-9">
                <?php
                //password input
                echo form_textarea(array(
                    'name' => 'description',
                    'id' => 'description',
                    'class' => 'col-lg-9 form-control',
                    'value' => '',
                ));
                ?>
            </div>
        </div>


        <div class="form-group">
            <?php
            echo form_label('Category: ', 'category', array(
                'class' => 'col-lg-3 control-label'
            ));
            ?>
            <div class="col-lg-9">
                <?php
                foreach ($categories as $category) {
                    $options[$category->category_id] = $category->category_name;
                }

                echo form_dropdown('Category', $options, '', "id = 'category' class = 'col-lg-9 form-control'"
                );
                ?>
            </div>
        </div>

        <div class="form-group">
            <?php
            echo form_label('Date: ', 'date', array(
                'class' => 'col-lg-3 control-label'
            ));
            ?>
            <div class="col-lg-9">
                <?php
                //password input
                echo form_input(array(
                    'name' => 'date',
                    'id' => 'date',
                    'class' => 'col-lg-9 form-control',
                    'value' => mdate("%Y-%m-%d", time()),
                ));
                ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4    ">
                <?php
                echo form_button(array(
                    'type' => 'submit',
                    'name' => 'submit',
                    'value' => 'Save Details',
                    'class' => 'btn btn-primary',
                    'content' => 'Save Details',
                ));
                ?>
            </div>
        </div>

        <input type="hidden" value="<?php echo $upload_data['file_name']; ?>" name="file_name">
        <input type="hidden" value="<?php echo $upload_data['full_path']; ?>" name="full_path">
        <input type="hidden" value="<?php echo $upload_data['file_ext']; ?>" name="file_ext">

        <?php echo form_close(); ?>
    </div>
    <div class="col-lg-6">
        <div class="art-wrapper">
            <img src="<?php echo base_url() . 'artwork/' . $upload_data['file_name'] ?>" class="img-responsive" alt="">
        </div>
       
    </div>
</div>