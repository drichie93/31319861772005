<?php

namespace app\model;


/**
 *
 */
class m_newtask
{
  function connect()
  {
    $database = new m_database;
    $conn = $database->connect();
    return $conn;
  }

  function m_getTasks($username)
  {
    $conn = $this->connect();
    $sql = "SELECT * FROM `tasks` WHERE `employeeID` = $username";
    $result = $conn->query($sql);

    $myArray = array();
  if ($result = $conn->query($sql)) {

      while($row = $result->fetch_array(MYSQLI_ASSOC)) {
              $myArray[] = $row;
      }
      $json_result =  json_encode($myArray);

      echo "
      <script>
      var myObject = { \"tasks\":$json_result };
      w3.displayObject(\"newtasks\", myObject);
      </script>
      ";
  }

    $result->close();
    $conn->close();
  }

}


 ?>
