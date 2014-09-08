<?php
$headerelements = array(
    'title' => $title . " - Online Learning",
);
$this->load->view('includes/header', $headerelements);
?>
<div id='main_content'></div>

<?php
switch ($user) {
    case 'visitor':
        $this->load->view('includes/navbar');
        break;

    case 'user':
        $this->load->view('includes/user_navbar');
        break;

    default :
        echo 'No User has been specified';
        break;
}
FB::log($main_content, 'The main content is');
if (isset($data)) {
    $this->load->view($main_content, $data);
} else {
    $this->load->view($main_content);
}
?>


<!-- comment 
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript" ></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php //echo base_url()   ?>js/myscript.min.js" type="text/javascript" ></script>
-->

<script src="<?php echo base_url(); ?>_/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>_/js/myscripts.js"></script>

<?php
$this->load->view('includes/footer');



