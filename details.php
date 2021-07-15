
<?php
session_start();
if(empty($_SESSION['username'])) {
	// Destroy the session and redirect the user
	session_destroy();
	header("Location: login.php");

}
	 require 'Connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
			 <label for="description">Description:</label><br>
  <input type="text" name="description" id="desc"><br><br>
  <input type="submit" value="Add" name="add">
	</form>
</body>
<script>
 
</script>
</html>

<?php

if (isset($_POST['add'])) {
	# code...

$description = $_POST['description'];
$query = 'SELECT * FROM account INNER JOIN description ON account.id=description.customerId WHERE description.customerId = ' . $_SESSION['id'];
$query2 = "INSERT INTO description (customerId, description) VALUES ('" . $_SESSION['id'] .  "','" . $description .  "')";
echo $query2;
if(isset($_POST['add'])) {

	if($description == "") {
	
	}
		else {
	$conn->query($query2);

}
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["description"]. "<br>" . "<hr>";
    }

} else {
	echo "LOL";
} 


}

}
 ?>
