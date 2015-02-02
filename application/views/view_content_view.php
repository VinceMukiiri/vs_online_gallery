<div class="row">
    <div class="col-lg-12"><div class="jumbotron">This is where the pdf will go</div></div>
</div>
<div class="row">
    <div class="col-lg-5">
        <div class="col-lg-12"><h2><?php echo $content->title ?></h2></div>        
        <div class="col-lg-12"><p><?php echo $content->description ?></p></div>
        <div class="col-lg-4"><strong>View Count: </strong><?php echo $content->view_count ?></div>
        <div class="col-lg-12"><strong>Uploader: </strong><?php echo $uploader->first_name . " " . $uploader->second_name ?></div>


    </div>
    <div class="col-lg-1"></div>
    <div class="col-lg-6">
        <?php
        echo form_open_multipart("explore/view?c=" . $content->content_id, array(
            'role' => 'form',
            'class' => 'form-horizontal'
        ));
        ?>
        <div class="form-group">
            <?php
            echo form_label('Comment: ', 'comment', array(
                'class' => 'col-lg-12 control-label'
            ));
            ?>
            <div class="col-sm-12">
                <?php
                //password input
                echo form_textarea(array(
                    'name' => 'comment',
                    'id' => 'Comment',
                    'cols' => "5",
                    'class' => 'col-sm-12 form-control',
                    'value' => '',
                ));
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-12 col-sm-offset-2 col-sm-4">
                <?php
                echo form_button(array(
                    'type' => 'submit',
                    'name' => 'submit',
                    'value' => 'Comment',
                    'class' => 'btn btn-defualt',
                    'content' => 'Comment',
                ));
                ?>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
    <hr>
    <div class="col-lg-12">
        <h3>Comments:</h3>
        <?php
        $this->load->model('user_model');
        $commenter = new User_Model();
        foreach ($comments as $key => $comment) :
            $commenter->load($comment->user_id);
            ?>
            <div class="">
                <strong><?php echo $commenter->first_name . " " . $commenter->second_name ?></strong><br />
                <p><?php echo $comment->comment_text ?></p>
            </div>
            &nbsp;
            <?php
        endforeach;
        ?>
    </div>
</div>