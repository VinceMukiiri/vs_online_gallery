

<?php
$this->load->model('user_model');
$user = new User_model;
$count = 0;
foreach ($contents as $time => $content) :
    ?>
    <?php $user->load($content->uploader_user_id) ?>
    <?php if ($count == 0) : ?>
        <div class = "row">
        <?php endif; ?>
        <div class = "col-xs-6 col-md-3">
            <a href="view?c=<?php echo $content->content_id ?>" class = "thumbnail">
                <h3><?php echo $content->title ?></h3>
                <p><?php echo $content->description ?></p>
                <small class="text-right"><?php echo $user->first_name . " " . $user->second_name ?></small>
                <small class="text-right"><?php echo date('Y-m-d', $content->upload_date) ?></small>
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




