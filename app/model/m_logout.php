<?php
namespace app\model;
/**
 *
 */
class m_logout
{

  function connect()
  {
    $database = new m_database;
    $conn = $database->connect();
    return $conn;
  }

  function getname($id)
  {
    $conn = $this->connect();

    $sql = "SELECT `employee` FROM `employees` WHERE `id` = '$id'";

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


  function m_changeStatus($id)
  {
    $conn = $this->connect();
    $name = $this->getname($id);
    $sql = "INSERT INTO `loginstatus`(`status`, `employee`, `employeeID`) VALUES ('0','$name','$id')";

    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

  }



}


 ?>
