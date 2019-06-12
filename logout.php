<?php
session_start();
require_once "vendor/autoload.php";

$logout = new App\Controller\c_logout;
$logout->changeStatus();
 ?>
