<?php
session_start();
require_once "vendor/autoload.php";



$home = new App\Controller\c_template;
$home->head();
$home->header();
$home->body("login");
$home->footer();
$home->foot();


 ?>
