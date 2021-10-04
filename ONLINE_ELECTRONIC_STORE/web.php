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
<?php
$name="video camera";
$price=10000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<p> Video Camera <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/c-1.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Simple Camera";
$price=2500;
?>
<div class="web">
<p> Simple Camera <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/c-2.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Latest Video Camera";
$price=35000;
?>
<div class="web">
<p> Latest Video Camera <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/c-3.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="5 Star Camera";
$price=25000;
?>
<div class="web">
<p> 5 Star Camera <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/c-4.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
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
<?php
$name="White Wired Headphone";
$price=300;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<p> White Wired Headphone <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp-1.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Black Headphone";
$price=5000;
?>
<div class="web">
<p> Black Headphone <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp-2.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="White Wired Headphone";
$price=350;
?>
<div class="web">
<p> White Wired Headphone <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp-3.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Ear Birds";
$price=5500;
?>
<div class="web">
<p> Ear Birds <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/hp-4.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
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
<?php
$name="Latest Music System";
$price=30000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<p> Latest Music System <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/m-1.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Speaker";
$price=800;
?>
<div class="web">
<p> Speaker<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/m-2.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Double Speaker";
$price=1200;
?>
<div class="web">
<p> Double Speaker <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/m-3.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Speaker(3)";
$price=18000;
?>
<div class="web">
<p> Speaker(3) <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/m-4.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Double Door Fridge";
$price=75000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<p> Double Door Fridge <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/r-1.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="3 Star Godrej Fridge";
$price=25000;
?>
<div class="web">
<p> 3 Star Godrej Fridge<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/r-2.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="7 Star Doble Door Latest Fridge ";
$price=78500;
?>
<div class="web">
<p> 7 Star Doble Door Latest Fridge <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/r-3.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="5 Star Fridge";
$price=35000;
?>
<div class="web">
<p> 5 Star Fridge <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/r-4.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="LCD Tv";
$price=27000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<p> LCD Tv <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/tv-1.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Latest 3D Tv";
$price=52000;
?>
<div class="web">
<p> Latest 3D Tv<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/tv-2.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="LED Tv";
$price=38000;
?>
<div class="web">
<p> LED Tv <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/tv-3.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Basic LCD Tv";
$price=23000;
?>
<div class="web">
<p> Basic LCD Tv<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/tv-4.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Simple Basic Washing Machine";
$price=12000;
?>
<table>
<form action ="final_buy.php?id=<?php  echo $id;?>&price=<?php  echo $price;?>&name=<?php  echo $name;?>" method="POST">
<div class="web">
<p> Simple Basic Washing Machine<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/w-1.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="3 Star Washing Machine";
$price=15000;
?>
<div class="web">
<p> 3 Star Washing Machine<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/w-2.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="5 Star Washing Machine ";
$price=25500;
?>
<div class="web">
<p> 5 Star Washing Machine <?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/w-3.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
<?php
$name="Latest Techno. Washing Machine";
$price=45000;
?>
<div class="web">
<p> Latest Techno. Washing Machine<?php  echo "<br/>" ;?>
    Price  <?php  echo $price ;?>
</p>
<img src="img/w-4.png " alt="Dell"  width="150" height="150">
<tr><input type="submit"  value="BUY" name="submit" /></tr>
</div>
</form>
</form>
</table>
</body>
</html>