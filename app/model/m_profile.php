<?php

namespace App\model;

use app\controller\c_profile;

require_once "/vendor/autoload.php";

/**
 *
 */
class m_profile
{


  function createLoginTable()
  {
    $database = new m_database;
    $conn = $database->connect();
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



  function loginStatus()
  {
    $database = new m_database;
    $conn = $database->connect();
    $this->createLoginTable();

    $profile = new c_profile;
    $employeeID = $profile->currentUser();

    $sql = "SELECT * FROM `loginStatus` WHERE `employeeID` = '$employeeID' ORDER BY ID DESC LIMIT 1";

    if ($conn->query($sql) === TRUE)
    {
      while($row = mysqli_fetch_array("$sql"))
      {
        $status = $row["status"];
      }

      if($status == 0)
      {
        return 0;
      }

      else {
        return 1;
      }
    }

  }
}


 ?>
