<?php

namespace app\controller;

use App\model\m_profile;

require_once "../task/vendor/autoload.php";

/**
 *
 */
class c_profile
{


  public $username;



  function startSession()
  {
    $this->username = $_COOKIE["user"];
  }


  function loginStatus()
  {
    $profile = new m_profile;
    $this->startSession();
    return $profile->m_loginStatus($this->username);
  }

  function accessControl()
  {
    if($this->loginStatus() == 0)
    {
      header("location:http://localhost/task/newtask.php");
    }
  }

  function writeFooter()
  {
    if($this->loginStatus($this->username) == 1)
    {

      $profile = new m_profile;
      $name = $profile->getname($this->username);
       $footer = "Welcome  " . $name;
      // file_put_contents("../task/app/view/structure/str_json/footer.json",$footer);
      // return $footer;

      echo "<script>
      function foot()
      {
        document.getElementById('foot').innerHTML = '$footer';
      }
      </script>";
    }

    elseif($this->loginStatus($this->username) == 0) {
      $footer = "LOGIN TO ACCESS APPLICATION";
      // file_put_contents("../task/app/view/structure/str_json/footer.json",$footer);
      // return $footer;
        echo "<script>
        function foot()
        {
          document.getElementById('foot').innerHTML = '$footer';
        }
        </script>";
    }
  }
}




 ?>
