<?php

namespace app\controller;



require_once "../task/vendor/autoload.php";
/**
 *
 */
class c_template
{

  function  head()
  {
     include_once($_SERVER["DOCUMENT_ROOT" ] . "/task/app/view/structure/head.php");
  }

  function  header()
  {
     include_once($_SERVER["DOCUMENT_ROOT" ] ."/task/app/view/structure/header.php");
  }

  function  foot()
  {
     include_once($_SERVER["DOCUMENT_ROOT" ] ."/task/app/view/structure/foot.php");
  }

  function  footer()
  {
     include_once($_SERVER["DOCUMENT_ROOT" ] ."/task/app/view/structure/footer.php");

  }

  function body($folder)
  {
    include_once($_SERVER["DOCUMENT_ROOT" ] ."/task/app/view/$folder/v_body.php");
    $profile = new c_profile;
    $profile->writeFooter();
  }
}

 ?>
