<?php
require_once "vendor/autoload.php";


ob_start();
session_start();
$profile = new App\Controller\c_profile;
$profile->accessControl();
$home = new App\Controller\c_template;
$home->head();
$home->header();
$home->body("newtask");
$home->footer();
$home->foot();

$index = new App\Controller\c_index;
$index->loadEmployees();

ob_flush();

 ?>
