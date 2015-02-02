
<!-- Press Coverage -->

<!-- Services -->
<div class="section">
    <div id='container' class="container">
        <?php 
        $this->load->model('user_model');
        $user = new User_Model;
        $count = 0;
        foreach ($arts as $id => $art) :
            $user->load($art->uploader_user_id);
        ?>
        <div class="art-box">
            <div class="art-wrapper">
                <a href="explore/view?c=<?php echo $art->art_id ?>">
                <img src="<?php echo base_url() . 'artwork/' . $art->file_name?>" class="img-responsive" alt="">
                </a>
                <div class="row">
                    <div class="col-md-12 art-detail"><h3><?php echo $art->title ?></h3></div>
                    <div class="col-md-6 art-detail"><p class="artist"><?php echo $user->first_name . " " . $user->second_name?></p></div>
                    <div class="col-md-6 art-stats">
                            <span class="fa fa-eye stat"> 6</span>
                            <span class="fa fa-comments stat"> 21</span>
                            <span class="fa fa-star stat"> 5</span>
                    </div>
                </div>


            </div>
        </div>  
        <?php endforeach; ?>

    </div>
</div>
<!-- End Services -->


