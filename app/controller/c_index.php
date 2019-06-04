<?php

namespace app\controller;

use app\model\m_newEmployee;

require_once "../task/vendor/autoload.php";
  /**
   *
   */
  class c_index
  {

      function loadEmployees()
      {
         $employee = new m_newEmployee;
         echo $employee->getEmployees();
      }


  }


 ?>
