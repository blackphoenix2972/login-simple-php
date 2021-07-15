<?php
	
	require 'Connection.php';
session_start(); 
	//To Do: Make the login page
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form  method="post">
		 <label for="username">Username:</label><br>
  <input type="text" name="username"><br><br>
  <label for="password">Password:</label><br>
  <input type="text" name="password"><br><br>

  <input type="submit" value="Submit" name="submit">
  
</form>
<?php

$username = "";
$id = "";
$sql = "";
$result = "";
$user_exist = True;

// Checking if the button was pressed
	 	if(isset($_POST['submit'])) {
	 		// Start the session 

 // Check if the username and password match in database

function does_user_exist() {

	global $sql;
	global $result;
	global $conn;
	

	$sql = "SELECT * FROM `account` WHERE username = '". $_POST['username'] . "' AND password ='" . $_POST['password'] ."'";

	$result = $conn->query($sql); // Execute the sql query

if ($result->num_rows == 1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$user_exist = True;
    	global $id;
	$_SESSION['username'] = $_POST['username'];
    	$_SESSION['id'] = $row['id'];
    	$username = $_SESSION['username'];
    	$id = $_SESSION['id'];
    	initialising_session_variables();
        redirect_user();
    }
} else {
	$user_exist = False;
}
}
function initialising_session_variables() {

}

function redirect_user() {

	header("Location: details.php");
}

does_user_exist();

}
  ?>

</body>
</html>