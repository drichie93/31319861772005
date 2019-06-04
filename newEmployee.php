<?php
require_once "vendor/autoload.php";



$home = new App\Controller\c_template;
$home->head();
$home->header();
$home->body("newEmployee");
$home->footer();
$home->foot();


 ?>
