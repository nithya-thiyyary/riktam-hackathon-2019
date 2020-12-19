<?php

//xampp server details
$servername = "localhost";
$username = "root";
$password = "";
$db="civic";

//create connection
$conn = new mysqli($servername, $username, $password,$db) or die("Not connected");
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

//reading data through html form
$Username=$_POST['Username'];
$Password=$_POST['Password'];



//inserting data into database
$sql="INSERT INTO user_det(Username,Password) values ('$Username','$Password')";


if(mysqli_query($conn,$sql))
{
	$message = "Your data is INSERTED";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<br>";
}
else
{
	$message = "your data is not inserted";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>