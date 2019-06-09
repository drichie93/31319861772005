<?php

require_once "../../vendor/autoload.php";
/**
 *
 */
class c_newEmployee
{
  function addEmployee($employee,$email,$password)
  {
      $model = new App\model\m_newEmployee;
      $result = $model->createEmployee($employee,$email,$password);

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
  $email = $_POST["email"];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $route->addEmployee($employee,$email,$password);
}
