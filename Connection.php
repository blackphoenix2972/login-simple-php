<?php 

$db_host = "localhost";
$db_user = "insert username";
$db_password = "insert password";
$db_name = "insert data base";

$conn =  mysqli_connect($db_host, $db_user, $db_password, $db_name) ;
if (!$conn) {
	die('Connection to the database failed.');
}

 ?>