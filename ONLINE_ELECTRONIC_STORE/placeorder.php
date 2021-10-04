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
<head><title>Shopping Site</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
</head>
<body>
<ul>
     <li><a href="home.php">Home</a></li>
     <li><a href="AboutUs.php?id=<?php  echo $id;?>">About Us</a></li>
     <li><a href="help.php?id=<?php  echo $id;?>">Help</a></li>
     <li><a href="userinfo.php?id=<?php  echo $id;?>">User Info</a></li>
     <li><a href="logout.php">logout</a></li>
</ul>


<form > 
<table>



 <lable class="yes">Your order is placed</lable></br>
<lable>Name : <?php echo $row['name'];?></lable></br>
<lable>Email :<?php echo $row['email'];?></lable></br>
<lable>Address: <?php echo $row['Address'];?></lable></br>
<lable>Contact No.: <?php echo $row['no'];?></lable></br>
<lable>Product Name: <?php echo $row['product'];?></lable></br>
<lable>Price: <?php echo $row['Price'];?></lable>
<lable>
<?php
$Name =$row['name'];
$Address =$row['Address'];
$Contact =$row['no'];
$price=$row['Price'];
$product= $row['product'];
$to_email = $row['email'];
$subject = "Online Electronic Shop";
$body = "Your Order is recived . \n Thank you for shopping\n\n Name: $Name\nAddress :$Address \n\n Email :$to_email\n\n Contact No. : $Contact \n\n Product Name: $product\n\n Price:$price ";
$headers = "From:  vedspanchal04@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email send successfully ";
} else {
    echo "Email sending failed...";
}
?></lable>
</table>
</form>
</body>
</html>