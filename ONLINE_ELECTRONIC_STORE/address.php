<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT address FROM UserInfo  WHERE id= 1" ;
$result = $conn->query($sql);
$row =$result->fetch_assoc();
$id=$_GET['id'];
// echo $row["address"];
?>
<html>
<head><title>Place Order</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
</head>

<body>
<ul>
     <li><a href="home.php">Home</a></li>
     <li><a href="AboutUs.php?id=<?php  echo $id;?>">About Us</a></li>
     <li><a href="userinfo.php?id=<?php  echo $id;?>">User Info</a></li>
     <li><a href="help.php?id=<?php  echo $id;?>">Help</a></li>
     <li><a href="logout.php">logout</a></li>
</ul>

<form method="POST"action="<?php $_PHP_SELF ?>">
<table>

 <tr> <td> <lable>New Address</lable> <input type="text" name="addressNew" placeholder="Address" />
 <input type="submit"  value="ADD" name="submit" placeholder="Login"/></td></tr>
 <lable>
 <?php
 if(isset($_POST["addressNew"]))
 {  
     $add=$_POST["addressNew"];
    $sql = "UPDATE UserInfo SET address= '$add' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
    

 }
 ?></lable>

 

 <input type="button" onclick="window.location.href='placeorder.php?id=<?php  echo $id;?>'" value="Place Order" />
 
 
 
</table>
</form>

<body>
</html>