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
$id=$_POST['issueid'];



//inserting data into database
$sql="UPDATE `issues` SET `user_name`='$user_name',`mail_id`='$mail_id',`muncipal_corp`='$mc',`comments`='$com',`date1`='$date' WHERE issue_id='$id'";

if ($conn->query($sql) === TRUE) {
	$message = "information updated ";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<br>";
}
else
{
	$message = "your data is not inserted";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>