<?php
require_once "vendor/autoload.php";


ob_start();
$home = new App\Controller\c_template;
$home->head();
$home->header();
$home->body("home");
$home->footer();
$home->foot();

$index = new App\Controller\c_index;
$index->loadEmployees();
ob_flush();

 ?>
