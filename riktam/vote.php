<?php
$servername = "localhost";
$username = "root";
$password = "";
$connection = new mysqli($servername, $username, $password) or die("Not connected");
if($connection)
{
	echo "connected";
	echo "<br>";
}
if(!mysqli_select_db($connection,'civic'))
{
	echo "Database not found";
	echo "<br>";
}
$Username=$_POST['username'];
$issueid=$_POST['issueid'];
 $query = mysqli_query($connection, "SELECT * FROM voted WHERE Username='$Username' AND issue_id='$issueid'");
 $rows = mysqli_num_rows($query);
 if($rows == 0){
mysqli_query($connection,"INSERT INTO voted(Username,issue_id) values ('$Username','$issueid')");
mysqli_query($connection,"UPDATE issues SET vote=(vote + 1) WHERE issue_id='$issueid'");
$message = "Thank you for voting";
echo "<script type='text/javascript'>alert('$message');</script>";
 }
 else
 {
 	$message = "your have already voted";
	echo "<script type='text/javascript'>alert('$message');</script>";

 	
 }
?>