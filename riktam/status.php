<!DOCTYPE html>
<html>
<head>
	<title>changing status</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<div class="container">
	<form action="up.php" method="POST">
	Issue ID<input type="text" name="issueid" >;
	<br>
	  <label for="status">Change Status</label>
    <select id="status" name="status" required="">
      <option value="0">Open</option>
      <option value="1">Submitted to newspaper</option>
      <option value="2">resolved</option>
      <option value="3">no action taken</option>
</select>
<input type="submit" value="Submit" required="">
	</form>
</div>


</body>
</html>