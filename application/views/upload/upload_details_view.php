<div class="panel panel-default">
    <div class="panel-heading">File Details</div>
    <div class="panel-body">
        <ul class="list-group">
            <li class="list-group-item"><strong>File Name</strong><?php echo $upload_data['file_name']; ?></li>
            <li class="list-group-item"><strong>Full Path</strong><?php echo $upload_data['full_path']; ?></li>
            <li class="list-group-item"><strong>File Size</strong><?php echo $upload_data['file_size']; ?></li>
        </ul>
    </div>
</div>

<?php
$this->load->helper('date');
echo form_open_multipart("upload/upload_details", array(
    'role' => 'form',
    'class' => 'form-horizontal'
));
?>
<div class="form-group">
    <?php
    echo form_label('Title: ', 'title', array(
        'class' => 'col-sm-2 control-label'
    ));
    ?>
    <div class="col-sm-4">
        <?php
        //password input
        echo form_input(array(
            'name' => 'title',
            'id' => 'title',
            'class' => 'col-sm-4 form-control',
            'value' => '',
        ));
        ?>
    </div>
</div>

<div class="form-group">
    <?php
    echo form_label('Description: ', 'description', array(
        'class' => 'col-sm-2 control-label'
    ));
    ?>
    <div class="col-sm-4">
        <?php
        //password input
        echo form_input(array(
            'name' => 'description',
            'id' => 'description',
            'class' => 'col-sm-4 form-control',
            'value' => '',
        ));
        ?>
    </div>
</div>

<div class="form-group">
    <?php
    echo form_label('Date: ', 'date', array(
        'class' => 'col-sm-2 control-label'
    ));
    ?>
    <div class="col-sm-4">
        <?php
        //password input
        echo form_input(array(
            'name' => 'date',
            'id' => 'date',
            'class' => 'col-sm-4 form-control',
            'value' => mdate("%Y-%m-%d", time()),
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
            'value' => 'Save Details',
            'class' => 'btn btn-defualt',
            'content' => 'Save Details',
        ));
        ?>
    </div>
</div>

<input type="hidden" value="<?php echo $upload_data['file_name'];?>" name="file_name">
<input type="hidden" value="<?php echo $upload_data['full_path'];?>" name="full_path">
<input type="hidden" value="<?php echo $upload_data['file_ext'];?>" name="file_ext">

<?php echo form_close(); ?>
