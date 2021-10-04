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
     <li><a href="AboutUs.php">About Us</a></li>
    
</ul>


<form>  
<lable>Name : <?php echo $row['name'];?></lable></br>
<lable>Email :<?php echo $row['email'];?></lable></br>
<lable>Address: <?php echo $row['Address'];?></lable></br>
<lable>Contact No.: <?php echo $row['no'];?></lable>
<lable>
<?php
$Name =$row['name'];
$Address =$row['Address'];
$Contact =$row['no'];
$email= $row['email'];
$mail="vedspanchal04@gmail.com";
$to_email = $mail;
$subject = "Online Electronic Shop";
$help=$_POST['query'];
$body = "\n\n\n\nName: $Name\nAddress :$Address \nContact No. : $Contact \n\n Query :$help";
$headers = "From: $email ";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email send successfully ";
} else {
    echo "Email sending failed...";
}
?></lable>
</form>
</body>
</html>