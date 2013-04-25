<?php

// Init CSS & JS files
define('TEMPLATENAME','default');
define('TEMPLATEDIR',get_view_path().TEMPLATENAME);

$this->load->view('members/includes/header');
$this->load->view($current_page,$current_data); 
$this->load->view('members/includes/footer');
