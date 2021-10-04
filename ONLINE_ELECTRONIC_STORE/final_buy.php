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

<form method="POST" action="placeorder.php?id=<?php  echo $id;?>">
<table>
<div class="fm">


 <?php
 if(isset($_POST["submit"]))
 {  
     $name=$_GET["name"];
     $price =$_GET['price'];
    $sql = "UPDATE UserInfo SET price= '$price', product= '$name' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error updating record: " . $conn->error;
    }
    

 }
 ?> 
 <label ><input type="submit"  value="BUY" name="submit" /></label>
 <label >      Do You Want to change your address ?</label>
 <label ><input type="button" onclick="window.location.href='address.php?id=<?php  echo $id;?>'" value="Change Address" /></label>

 </div>
 
 
</table>
</form>

<body>
</html>