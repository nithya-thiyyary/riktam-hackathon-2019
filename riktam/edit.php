<!DOCTYPE html>
<head>
<title>aa
</title>
<style >

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
  .edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
</style>
</head>
<body>
<table id="customers">
<tr>
<th>Issue_id</th>
<th>User_name</th>
<th>Mail_id</th>
<th>Muncipal_corporation</th>
<th>Comments</th>
<th>Votes</th>
<th>Status</th>
<th>Date and Time</th>
</tr>
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
$name=$_POST['username'];
$sql= "SELECT issue_id,user_name,mail_id,muncipal_corp,comments,vote,status,date1 FROM issues where user_name='$name' ";
$result=$conn->query($sql);


if($result->num_rows  >  0 )  {
   while($row=$result->fetch_assoc())  {
     echo "<tr><td>".$row["issue_id"]."</td><td>".$row["user_name"]."</td><td>".$row["mail_id"]."</td><td>".$row["muncipal_corp"]."</td><td>".$row["comments"]."</td><td>".$row["vote"]."</td><td>".$row["status"]."</td><td>".$row["date1"]."</td><td><a href=editp.html >Edit</a> </td> <td><a href=delp.html>Delete</a></td></tr>";
}
echo "</table>";
}
else {
echo "0 result";
}
$conn->close();
?>
</table>
</body>
</html>