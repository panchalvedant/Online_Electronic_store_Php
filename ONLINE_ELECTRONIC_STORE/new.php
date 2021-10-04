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
$me=null;
$email=$_POST["email"];
$name= $_POST['name'] ;
$address=$_POST['address'];
$no=$_POST["no"] ;
$pass=$_POST["password"];
$pass1=$_POST["password1"];
if ($pass==$pass1 && isset($_POST["conferm"])){
$sql = "INSERT INTO UserInfo (name,email,Address,no,password)VALUES ('$name','$email','$address','$no','$pass')";
}
else
{
    echo "Password Must be same";
}
if ($pass==$pass1 && isset($_POST["conferm"])){
if ($conn->query($sql) === TRUE) {
 $me= " Welcome you  become our new user";}
} else {
  $me="Password Must be same " ;
}
if ( !isset($_POST["conferm"]))
{
$me=NULL;
}
     

    
?> 
<html>
<head><title>Registration Form</title><link rel="stylesheet" href="style.css"></head>
<body>
<ul>
     <li><a href="home.php">Home</a></li>
     <li><a href="AboutUs.php?id=<?php  echo $id;?>">About Us</a></li>
     <li><a href="help.php?id=<?php  echo $id;?>">Help</a></li>
</ul>
<form method="POST" action="<?php $_PHP_SELF ?>">

<table >
<div class="logo"></div>

<div class="first">
<tr> <td> <lable> Username *</lable><input type="text" name="name" placeholder="Username" required/></td></tr>
<tr> <td> <lable> Email *</lable><input type="text" name="email" placeholder="email" required/></td></tr>
<tr> <td> <lable> Address *</lable><input type="text" name="address" placeholder="Address" required/></td></tr>
<tr> <td> <lable> Contact No. * </lable><input type="tel" name="no" placeholder="Contact Number" pattern="[0-9]{10}" required/></td></tr>
<tr> <td> <lable> Password *</lable><input type="password" name="password" placeholder="Password" required/></td></tr>
<tr> <td> <lable> confirm password *</lable><input type="password" name="password1" placeholder="Password" required <?php ?>/></td></tr>
</div>
<tr> <td> <input type="submit"  value="Conferm" name="conferm" placeholder="Conferm"/>
<input type="reset"  value="Reset" name="reset" placeholder="Reset"/>   
<input type="button" onclick="window.location.href='login.php';" value="Login" />
 </td></tr>
 <lable class="d1"><?php echo  $me;?> </lable>                      
</table>
</form>
<body>
</html>