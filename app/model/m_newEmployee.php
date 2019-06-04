<?php

namespace app\model;
require_once "/vendor/autoload.php";
/**
 *
 */
class m_newEmployee
{
    function createTable()
    {
        $database = new m_database;
        $conn = $database->connect();

        // sql to create table
        $sql = "CREATE TABLE IF NOT EXISTS employees (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        employee VARCHAR(255) NOT NULL,
        employeeID VARCHAR(255) NOT NULL,
        created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql) === TRUE) {
            //echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }

        $conn->close();
    }


  function createEmployee($employee)
  {
    $database = new m_database;
    $conn = $database->connect();
      $this->createTable();
      $id = rand(100,999);
       $sql = "INSERT INTO `employees`( `employee`, `employeeID`) VALUES ('$employee','$id')";
       if ($conn->query($sql) === TRUE) {

           $result = true;
           return $result;
       } else {
         $result = 2;
         return $result;
           //echo "Error inserting  " . $conn->error;
       }
       $conn->close();
  }


  function getEmployees()
  {
      $database = new m_database;
      $conn = $database->connect();
      $sql = "SELECT * FROM `employees`";
      if ($result = $conn->query($sql)) {

            //Initialize array variable
            $dbdata = array();

          //Fetch into associative array
            while ( $row = $result->fetch_assoc())  {
            $dbdata[]=$row;
            }

          //Print array in JSON format
           $employee_json = json_encode($dbdata);
           // file_put_contents('../task/app/model/json/employees.json', "{\"employees \":");
           file_put_contents('../task/app/model/json/employees.json',"{\"employees\":". $employee_json."}");
           // file_put_contents('../task/app/model/json/employees.json', "}");
      }

      else {
          echo "Error getting data  " . $conn->error;
      }

      $conn->close();
    }
  }
