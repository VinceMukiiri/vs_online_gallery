
<div class="container fullpage">
    <?php
    if (isset($error)) {
        echo '<div class="alert alert-danger">' . $error . '</div>';
    }
    ?>

    <?php echo form_open_multipart('upload/do_upload'); ?>

    <input type="file" name="content_file" size="20" />

    <br /><br />

    <input type="submit" value="upload" />



    <?php echo form_close(); ?>
</div>
