<?php 

//Database constants connection

define('DB_HOST', 'localhost');
define('DB_USER', 'asan');
define('DB_PASS', 'lolek');
define('DB_NAME', 'gallery_db');

$connection= mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// if ($connection){
// 	echo 'true';
// }

?>
