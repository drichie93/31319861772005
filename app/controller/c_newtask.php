<?php

namespace app\controller;
/**
 *
 */
use App\model\m_newtask;

require_once "../task/vendor/autoload.php";

class c_newtask extends c_profile
{


  function getTasks()
  {
    $this->startSession();
    $newtask = new m_newtask;
    $newtask->m_getTasks($this->username);
  }
}


 ?>
