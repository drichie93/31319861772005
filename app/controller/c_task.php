<?php

require_once "../../vendor/autoload.php";
/**
 *
 */
class c_task
{
  function createTask($task,$employee)
  {
      $model = new App\model\m_task;
      $result = $model->createTask($task,$employee);

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
