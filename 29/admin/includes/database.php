<?php 

require_once('config.php');
class Database {

	public $connection;

	public function __construct(){

		$this->open_db_connection();
	}

	public function open_db_connection(){

		// $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		$this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

		if (mysqli_connect_errno()){
			die("Database connection failed." . $this->connection->connect_error());
			// die("Database connection failed." . mysqli_error());
		}
	}
}

$database = new Database();
// $database->open_db_connection();
?>