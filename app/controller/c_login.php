<?php

namespace app\controller;

use app\model\m_login;

require_once "../../vendor/autoload.php";

/**
 *
 */
class c_login
{

  function verify($email,$password)
  {
    $startLogin = new m_login;

    $hashed = $startLogin->getPassword($email);


    if (password_verify($password, $hashed))
    {
      echo 'Password is valid!';
      return true;
    }
      else {
          echo 'Invalid password.';
          return false;
          die();
      }
  }

  function login($email,$password)
  {

    $this->verify($email,$password);
    $startLogin = new m_login;
    $startLogin->login($email,$password);
    header("location:http://localhost/task/newtask.php");

  }
}

if(isset($_POST["login"]))
{
  $email = $_POST["email"];
  $password = $_POST["password"];

  $login = new c_login;
  $login->login($email,$password);
}
 ?>
