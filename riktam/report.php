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

//reading data through html form.

$user_name=$_POST['fname'];
$mail_id=$_POST['email'];
$mc=$_POST['location'];
$com=$_POST['subject'];
$date=$_POST['Date'];
$booking=uniqid();



//inserting data into database
$sql="INSERT INTO issues(issue_id,user_name,mail_id,muncipal_corp,comments,date1) values('$booking','$user_name','$mail_id','$mc','$com','$date')";

if(mysqli_query($conn,$sql))
{
	$message = "information accepted please wait for the confirmation and your issue id is $booking";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<br>";
}
else
{
	$message = "your data is not inserted";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>