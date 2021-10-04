<?php
session_start();
if(!$_SESSION['project'])
{
  header('location:login.php');
}
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

$id=$_GET['id'];

?>
<html>
<head><title>Shopping Site</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
</head>
<body>
<ul>
     <li><a href="home.php">Home</a></li>
     <li><a href="AboutUs.php">About Us</a></li>
     <li><a href="category.php">choose_category_vice</a></li>
     <li><a href="help.php?id=<?php  echo $id;?>">Help</a></li>
     <li><a href="userinfo.php?id=<?php  echo $id;?>">User Info</a></li>
     <li><a href="logout.php">logout</a></li>
</ul>
<!--<div class="web">
    <p> Dell Laptop</p>
    <p> PRICE=65000</p>
<img src="img/dell.jpg" alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href='buy.php?id=2'" value="BUY" />
</div>
<div class="web">
<p> HP Laptop</p>
<p> PRICE=35000</p>
<img src="img/hp.png" alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href=' buy.php?id='" value="BUY" />
</div>
<div class="web">
<p> Apple Laptop</p>
<p> PRICE=100000</p>
<img src="img/apple.png" alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href=' buy.php?id=<'" value="BUY" />
</div>
<div class="web">
<p> Computer </p>
<p> PRICE=40000</p>
<img src="img/computer.png" alt="Dell"  width="150" height="150">
<input type="button" onclick="window.location.href=' buy.php?id='" value="BUY" />
</div>-->
<?php
$name="DELL LAPTOP";
$price=2000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<p> DELL LAPTOP <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/dell.jpg " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="HP LAPTOP";
$price=7000;
?>
<div class="web">
<p> HP LAPTOP <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="APPLE LAPTOP";
$price=75000;
?>
<div class="web">
<p> APPLE LAPTOP <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/apple.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="COMPUTER";
$price=5000;
?>
<div class="web">
<p> COMPUTER <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/computer.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
</form>
</form>
</table>
</body>
</html>