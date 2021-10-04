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

<?php
$name="Apple Mobile";
$price=99000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<p> Apple Mobile <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/mob-1.jpg " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Samsung Mobile";
$price=22500;
?>
<div class="web">
<p> Samsung Mobile<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/mob-2.jpg " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Oppo Mobile S3";
$price=24000;
?>
<div class="web">
<p> Oppo Mobile S3 <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/mob-3.jpg " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Vivo Mobile V10";
$price=25000;
?>
<div class="web">
<p> Vivo Mobile V10 <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/mob-4.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
</form>
</form>
</table>
</body>
</html>