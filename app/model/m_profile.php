<?php

namespace App\model;

use app\controller\c_profile;


require_once "/vendor/autoload.php";

/**
 *
 */
class m_profile
{


  function connect()
  {
    $database = new m_database;
    $conn = $database->connect();
    return $conn;
  }

  function createLoginTable()
  {

    $conn = $this->connect();
    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS loginStatus (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    status VARCHAR(255) NOT NULL,
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



  function m_loginStatus($employeeID)
  {
    $conn = $this->connect();
    $this->createLoginTable();

    $profile = new c_profile;


    $sql = "SELECT `status` FROM `loginStatus` WHERE `employeeID` = '$employeeID' ORDER BY ID DESC LIMIT 1";
    $result = $conn->query($sql);

      if ($result->num_rows > 0)
      {
          // output data of each row
          while($row = $result->fetch_assoc())
          {
              $status = $row["status"];
          }
          return $status;
      }
      else
      {
          
      }


}

  function getname($username)
  {
    $conn = $this->connect();

    $sql = "SELECT `employee` FROM `employees` WHERE `employeeID` = '$username'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $name = $row["employee"];
        }

        return $name;
    } else {
        echo "0 results";
    }
    $conn->close();
  }

}


 ?>
