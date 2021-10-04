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
$name="Basic Flaur Machine";
$price=10000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<p> Basic Flaur Machine <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/f-1.jpg " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Latest Flaur Machine";
$price=18000;
?>
<div class="web">
<p> Latest Flaur Machine<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/f-2.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
</form>
</form>
</table>
</body>
</html>