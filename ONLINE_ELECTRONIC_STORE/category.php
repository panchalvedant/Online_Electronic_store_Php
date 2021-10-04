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
$sql = "SELECT id FROM UserInfo";
$result = $conn->query($sql);
$row =$result->fetch_assoc();
?>


<html>
<head><title>Shopping Site for Electronic devices</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>
<ul>
     <li><a href="home.php">Home</a></li>
     <li><a href="AboutUs.php">About Us</a></li>
     <li><a href="#">Help</a></li>
</ul>
<!--<form action="web.php">
  <font color="Yellow" size=10>  
  <label for="items">  Choose your Electronic Device:  </label>
</font>
  <select name="items" id="items">
  <font color="Green" size=9>
    <option value="Mobile">Mobile</option>
    <option value="Laptop">Laptop</option>
    <option value="TV">Tv</option>
    <option value=" Headphones ">  Headphones  </option>
    <option value="Refridgerator">   Refridgerator </option>
    <option value="camera"> Camera  </option>
    <option value="washing_machine">  Washing_Machine</option>
    <option value="musicsystem">  Music_System</option>
    <option value="washing_machine">  Washing_Machine</option>
    <option value="flourmill">  FlourMill_Machine</option>
    </font>  
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>-->
<div class="dropdown">
  <button class="dropbtn">Choose Your Electronic Device:</button>
  <div class="dropdown-content">
    <a href="mobile.php">Mobile</a>
    <a href="laptop.php">Laptop</a>
    <a href="tv.php">Tv</a>
    <a href="headphones.php">Headphones</a>
    <a href="refridgerator.php">Refridgerator</a>
    <a href="camera.php">Camera </a>
    <a href="washing_machine.php">Washing_Machine</a>
    <a href="music_system.php"> Music_System</a>
    <a href="flaur_machine.php">FlourMill_Machine</a>  
  </div>
</div>
</body>
</html>