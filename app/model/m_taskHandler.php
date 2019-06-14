<?php

namespace app\model;

/**
 *
 */
class m_taskHandler
{
  function connect()
  {
    $database = new m_database;
    $conn = $database->connect();
    return $conn;
  }

  function m_update($id,$action)
  {
    $conn = $this->connect();
    $sql = "UPDATE `tasks` SET `status`='$action' WHERE `id`='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
  }

}


 ?>
