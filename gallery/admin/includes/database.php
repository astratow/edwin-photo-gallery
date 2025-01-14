<?php
require_once("new_config.php");

class Database {

    public $connection;

    function __construct(){
      $this->open_db_connection();
    }
    public function open_db_connection(){

      /*$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if(mysqli_connect_errno()){
              die("Database connection failed badly" . myswqli_error);
        }*/
      $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
      if($this->connection->connect_errno){
        die("Database connection failed badly" . $this->connection->connect_errno);
      }
    }


public function query($sql){
  //$result = mysqli_query($this->connection, $sql);
  $result = $this->connection->query($sql);
/*  if(!$result){
    die("Query Failed");
  }*/
  return $result;
}
private function confirm_query($result){
  if(!$result){
    die("Query Failed");
  }
}
public function escape_string($string){
  mysqli_real_escape_string($this->connection, $string);
  return $escaped_string;
}
}
$database = new Database();

//$database->open_db_connection();

    ?>
