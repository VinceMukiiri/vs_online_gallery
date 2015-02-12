<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Upload</h1>
            </div>
        </div>
    </div>
</div>
<div class="container fullpage">
    <?php
    if (isset($error)) {
        echo '<div class="alert alert-danger">' . $error . '</div>';
    }
    ?>

    <?php echo form_open_multipart('upload/do_upload'); ?>

    <div class="form-group">
        <label for="content_file">File:</label>
        <input type="file" id="InputFile" name="content_file">
        <p class="help-block">Please choose a jpg image file below 10mb in size</p>
    </div>

    <br /><br />

    <input type="submit" value="Upload" class="btn btn-primary" />



    <?php echo form_close(); ?>
</div>
