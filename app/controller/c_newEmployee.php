<?php

require_once "../../vendor/autoload.php";
/**
 *
 */
class c_newEmployee
{
  function addEmployee($employee)
  {
      $model = new App\model\m_newEmployee;
      $result = $model->createEmployee($employee);

      if($result)
      {
         header("Location:http://localhost/task/newEmployee.php?result=$result");
      }

      else {
        echo "not treu";
      }
  }
}

if (isset($_POST["employee"]))
{
  $route = new c_newEmployee;

  $employee = $_POST["employee"];
  $route->addEmployee($employee);
}
