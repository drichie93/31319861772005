<?php

namespace app\controller;
use app\model\m_taskHandler;
require_once "../../vendor/autoload.php";
/**
 *
 */
class c_taskHandler
{
  function update($id,$action)
  {
    $taskh = new m_taskHandler;
    $taskh->m_update($id,$action);
  }

}

if(isset($_POST["id"]))
{
  $id = $_POST["id"];
  $action = $_POST["action"];

  $handler = new c_taskHandler;
  $handler->update($id,$action);
}



 ?>
