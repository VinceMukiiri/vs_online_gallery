<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Explore<small> - <?php echo $heading ?></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-folder-open"></i> <?php echo $heading ?>
            </li>

        </ol>
    </div>
</div>

<?php
$this->load->model('user_model');
$user = new User_model;
$count = 0;
foreach ($arts as $time => $art) :
    ?>
    <?php $user->load($art->uploader_user_id) ?>
    <?php if ($count == 0) : ?>
        <div class = "row">
        <?php endif; ?>
        <div class = "col-xs-6 col-md-3">
            <a href="<?php echo base_url() . 'view?c=' . $art->content_id ?>" class = "thumbnail">
                <h3 class="text-success"><?php echo $art->title ?></h3>
                <p><?php echo $content->description ?></p>
                <small class="text-right"><?php echo $user->first_name . " " . $user->second_name ?></small>
                <small class="text-right"><?php echo date('Y-m-d', $art->upload_date) ?></small><br>
                <small class="text-info"><?php echo $art->view_count ?> views</small>
            </a>
        </div>
        <?php
        if ($count == 3) {
            echo '</div>';
            $count = 0;
        } else {
            $count++;
        }
        ?>
<?php endforeach; ?>




