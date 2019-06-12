<?php
namespace app\controller;

use app\controller\c_profile;
use app\model\m_task;

require_once "../../vendor/autoload.php";
/**
 *
 */
class c_task extends c_profile
{
  function createTask($task,$employee)
  {
      $model = new m_task;
      $this->startSession();
      $result = $model->createTask($task,$employee, $this->username);

      if($result)
      {
         header("Location:http://localhost/task/index.php?result=$result");
      }

      else {
        echo "not treu";
      }
  }
}

if (isset($_POST["task"]))
{
  $route = new c_task;

  $task = $_POST["task"];
  $employee = $_POST["employee"];
  $route->createTask($task,$employee);
}
