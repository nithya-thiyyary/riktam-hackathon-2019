<?php

//xampp server details
$servername = "localhost";
$username = "root";
$password = "";

//create connection
$conn = new mysqli($servername, $username, $password) or die("Not connected");
if($conn)
{
	echo "connected";
	echo "<br>";
}
if(!mysqli_select_db($conn,'civic'))
{
	echo "Database not found";
	echo "<br>";
}
$iid=$_POST['issueid'];
$sql= "DELETE FROM `issues` WHERE `issues`.`issue_id` ='$iid'";
if ($conn->query($sql) === TRUE) {
$message = "Issue deleted";
echo "<script type='text/javascript'>alert('$message');</script>";
//header('location:edit.html');
}
else {
  echo "Error deleting record: " . $conn->error;
}
?>