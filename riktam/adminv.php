<!DOCTYPE html>
<head>
<title>aa
</title>
<style>
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
<th>id</th>
<th>vote</th>
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
$sql= "SELECT issue_id,user_name,mail_id,muncipal_corp,comments,vote,status,date1,id FROM issues";
$result=$conn->query($sql);

if($result->num_rows  >  0 )  {
   while($row=$result->fetch_assoc())  {
     echo "<tr><td>".$row["issue_id"]."</td><td>".$row["user_name"]."</td><td>".$row["mail_id"]."</td><td>".$row["muncipal_corp"]."</td><td>".$row["comments"]."</td><td>".$row["vote"]."</td><td>".$row["status"]."</td><td>".$row["date1"]."</td><td>".$row["id"]."</td><td><a href=status.html>Change Status</a></tr>";
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