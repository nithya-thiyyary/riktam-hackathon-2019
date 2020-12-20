<?php
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
$id=$_POST['issueid'];
$val=$_POST['status'];
$sql="UPDATE  issues set VOTE='$val' WHERE issue_id='$id'";
if(mysqli_query($conn,$sql))
{
	$message = "information updated";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<br>";
}
else
{
	$message = "your data is not updated";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>