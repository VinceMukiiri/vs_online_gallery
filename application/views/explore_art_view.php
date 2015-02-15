<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo $heading ?></h1>
            </div>
        </div>
    </div>
</div>



<div class="section">
    <div class="container">
        <div class="col-lg-2 side-nav">

            <div>
                <ul>

                    <li class="<?php if (!($this->input->get('cat'))) echo 'active' ?>">
                        <a href="<?php echo base_url() . $this->uri->uri_string() . '?crit=' . $this->input->get('crit')?>">All</a>
                    
                    </li>
                    <hr />
                    <?php
                    foreach ($categories as $category) :
                        ?>
                        <li class="<?php if ($category->category_id == $this->input->get('cat')) echo 'active' ?>">
                            <a href="<?php echo base_url() . $this->uri->uri_string() . '?crit=' . $this->input->get('crit') . '&cat=' . $category->category_id ?>"><?php echo $category->category_name ?></a>
                        </li>

                        <?php
                    endforeach;
                    ?>
                </ul>
            </div>
        </div>

        <div id='msnry-cont-3' class="col-lg-10">


            <?php
            $this->load->model('user_model');
            $user = new User_model;

            $this->load->model('comment_model');
            $comment = new Comment_Model();

            $this->load->model('category_model');
            $category = new Category_Model();
            $count = 0;
            foreach ($arts as $id => $art) :
                $user->load($art->uploader_user_id);
                $category->load($art->category_id);
                ?>
                <div class="art-box-thrd">
                    <div class="art-wrapper">
                        <a href="<?php echo base_url() . 'index.php/view?art=' . $art->art_id ?>">
                            <img src="<?php echo base_url() . 'artwork/' . $art->file_name ?>" class="img-responsive" alt="">
                        </a>
                        <div class="row">
                            <div class="col-md-12 art-detail"><h3><?php echo $art->title ?></h3></div>
                            <div class="col-md-6 art-detail"><p class="artist"><?php echo $user->first_name . " " . $user->second_name ?></p></div>
                            <div class="col-md-6 art-detail"><p class="category"><?php echo $category->category_name ?></p></div>
                            <div class="col-md-12 art-stats">
                                <span class="fa fa-eye stat"> <?php echo $art->view_count ?></span>
                                <span class="fa fa-comments stat"> <?php echo $comment->count_comments($art->art_id) ?></span>
                                <span class="fa fa-star stat"> <?php echo $art->favorites ?></span>
                            </div>
                        </div>


                    </div>
                </div>  

            <?php endforeach; ?>
        </div>
    </div>
</div>




