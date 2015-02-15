<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo $art->title ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">

        <div class="col-lg-8"> 
            <img src="<?php echo base_url() . 'artwork/' . $art->file_name ?>" class="img-responsive art-view" alt="">

        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-3">    
            <div class="row">
                <div><p><?php echo $art->description ?></p></div>
                <div><strong>View Count: </strong><span class="badge"><?php echo $art->view_count ?></span></div>
                <div><strong>Favorites: </strong><span class="badge"><?php echo $art->favorites ?></span></div>
                <div><strong>Uploader: </strong><?php echo $uploader->first_name . " " . $uploader->second_name ?></div>
                <div style="height: 10px; display: block"></div>
                <div class="padded-btn"><a href="<?php echo base_url() . 'index.php/view?fav=1&art=' . $art->art_id ?>" class="btn"><span class="fa fa-star"></span> Favorite</a></div>
                <div>
                    <form action="view/add_to_cart" method="get">

                        <input type="hidden" value="<?php echo $art->art_id ?>" name="art" />
                        <button type="submit" class="btn padded-btn"><span class="fa fa-money"></span> Buy</button> 
                        <select name="qty">
                            <?php for ($i = 1; $i <= 10; $i++) : ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php
                            endfor;
                            ?>
                        </select>
                    </form>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2>Comments:</h2>
                <?php
                echo form_open_multipart("view?art=" . $art->art_id, array(
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
                            'class' => 'btn btn-primary',
                            'content' => 'Comment',
                        ));
                        ?>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class='span12'></div>
            <div class="col-lg-12">

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
    </div>