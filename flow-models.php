<?php
class Flow
{
  private $db_connection = null;

  public function __construct()
  {
      $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  }

  function getAll()
  {
    $sql = "SELECT * FROM tbl_lean";
    $result = $this->db_connection->query($sql);
    return $result;
  }
?>
