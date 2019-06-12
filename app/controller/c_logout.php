<?php

namespace app\controller;

use app\model\m_logout;

/**
 *
 */
class c_logout
{

  public $username;


  function getCookie()
  {
    if(isset($_COOKIE["user"]))
    {
      $this->username = $_COOKIE["user"];
      return $this->username;
    }
  }

  function changeStatus()
  {
    $user = $this->getCookie();
    $logout = new m_logout;
    $logout->m_changeStatus($user);
    if(isset($_COOKIE["user"]))
    {
      unset($_COOKIE["user"]);
    }
    header("location:http://localhost/task/index.php");
  }
}


 ?>
