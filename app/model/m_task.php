<?php

namespace app\model;
require_once "../../vendor/autoload.php";
/**
 *
 */
class m_task
{
    function createTable()
    {
        $database = new m_database;
        $conn = $database->connect();

        // sql to create table
        $sql = "CREATE TABLE IF NOT EXISTS tasks (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        task VARCHAR(255) NOT NULL,
        employee VARCHAR(255) NOT NULL,
        created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if ($conn->query($sql) === TRUE) {
            //echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }

        $conn->close();
    }

  function createTask($task,$employee)
  {
    $database = new m_database;
    $conn = $database->connect();
      $this->createTable();
       $sql = "INSERT INTO `tasks`( `task`, `employee`) VALUES ('$task', '$employee')";
       if ($conn->query($sql) === TRUE) {

           $result = true;
           return $result;
       } else {
         $result = 2;
         return $result;
           // echo "Error inserting  " . $conn->error;
       }
  }
}


 ?>
