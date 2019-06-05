<?php

namespace app\controller;

use App\model\m_profile;

require_once "../task/vendor/autoload.php";

/**
 *
 */
class c_profile
{


  function startSession()
  {
    session_start();
    $status = $_SESSION['status'] = 1;
    return $status;
  }

  function currentUser()
  {
    $_SESSION['user'] = "785";
    $currentUser = $_SESSION['user'];
    return $currentUser;
  }

  function loginStatus()
  {
    $profile = new m_profile;
    return $profile->loginStatus();
  }

  function writeFooter()
  {
    if($this->loginStatus() == 0)
    {
       $footer = "Welcome  " . $this->currentUser();
      // file_put_contents("../task/app/view/structure/str_json/footer.json",$footer);
      // return $footer;

      echo "<script>
      function foot()
      {
        document.getElementById('foot').innerHTML = '$footer';
      }
      </script>";
    }

    else {
      $footer = "{ \"content\" : \"Login to Access Application". "\"}";
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
