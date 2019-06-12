<?php
namespace app\model;
/**
 *
 */
class m_login
{

  function connect()
  {
    $database = new m_database;
    $conn = $database->connect();
    return $conn;
  }

  function getPassword($email)
  {
    $conn = $this->connect();

    $sql = "SELECT `password` FROM `employees` WHERE `email` = '$email'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $hash = $row["password"];
        }

        return $hash;
    } else {
        echo "0 results";
    }
    $conn->close();
  }

  function getname($email)
  {
    $conn = $this->connect();

    $sql = "SELECT `employee` FROM `employees` WHERE `email` = '$email'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        // output data of each row
        while($row = $result->fetch_assoc())
        {
            $name = $row["employee"];
        }

        return $name;
    }
    else
    {
        echo "0 results";
    }
    $conn->close();
  }

  function getId($email)
  {
    $conn = $this->connect();

    $sql = "SELECT `employeeID` FROM `employees` WHERE `email` = '$email'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id = $row["employeeID"];
        }

        return $id;
    } else {
        echo "0 results";
    }
    $conn->close();
  }

  function login($email,$password)
  {
    $conn = $this->connect();
    $name = $this->getname($email);
    $id = $this->getId($email);
    $sql = "INSERT INTO `loginstatus`(`status`, `employee`, `employeeID`) VALUES ('1','$name','$id')";

    if ($conn->query($sql) === TRUE) {
      $cookie_name = "user";
      $cookie_value = $id;
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

  }
}

 ?>
