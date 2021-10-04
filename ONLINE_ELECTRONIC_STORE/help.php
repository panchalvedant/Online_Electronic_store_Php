<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$id=$_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM UserInfo WHERE id = $id";
$result = $conn->query($sql);
$row =$result->fetch_assoc();


?>
<html>
<head><title>Help</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<ul>
     <li><a href="home.php">Home</a></li>
     <li><a href="AboutUs.php">About Us</a></li>
   
</ul> 
<form action="gohelp.php?id=<?php  echo $id;?>" method="POST">
  
<table >
<div class="logo"></div>
<div class="fm">

<b>Help</b>
</div>
<tr> <td> <lable> Write your query:</lable><input type="text" name="query" placeholder="query" required/></td></tr>
<tr> <td> <input type="submit"  value="Submit" name="submit" placeholder="Login"/>
<input type="reset"  value="Reset" name="reset" placeholder="Reset"/>   
 </td></tr>
</table>
</form>
<body>
</html>