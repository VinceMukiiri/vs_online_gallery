<?php

$headerelements = array(
    'title' => $title . " - Online Gallery",
);
$this->load->view('includes/header', $headerelements);

/**
 * If login, don't load the navbar
 */
if ($main_content == 'login_view' || $main_content == 'registration_view') {
    //don't load navbar
} else {
    $this->load->view('includes/top_navbar');
}

if ($main_content == 'login_view' || $main_content == 'registration_view') {
    //don't load footer
} else {
if (isset($sidebar)) {
    $this->load->view($sidebar);
}
     
}

echo '<div id="page-wrapper ">';
FB::log($main_content, 'The main content is'); //console message used for debugging
if (isset($data)) {
    $this->load->view($main_content, $data);
} else {
    $this->load->view($main_content);
}
echo '</div>'; //end page-wrapper

/**
 * If login, don't load the footer
 */
if ($main_content == 'login_view' || $main_content == 'registration_view') {
    //don't load footer
} else {
     $this->load->view('includes/footer');
}

//end of document with javascript calls and </body> & </html> tag
$this->load->view('includes/js_calls');



