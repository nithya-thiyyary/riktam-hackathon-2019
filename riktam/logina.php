<?php
$servername="localhost";
$user=$_POST['Username'];
$pass=$_POST['Password'];
 if($user=="admin" && $pass=="admin")
{
	header("location:adminpage.html");
}
else
{
echo "invalid credentials";
}



?>