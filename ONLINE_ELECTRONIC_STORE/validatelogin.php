
<html>
<head><title>User Login</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
</head>

<body>
<ul>
     <li><a href="home.php">Home</a></li>
     <li><a href="AboutUs.php">About Us</a></li>
     <li><a href="#">Help</a></li>
</ul> 

<form><lable>
<?php
if($_POST)
{
     $host="localhost";
     $user="root";
     $pass="";
     $db="project";
     $username=$_POST['name'];
     $password=$_POST['password'];
          $conn=mysqli_connect($host,$user,$pass,$db);
          if(!$conn)
          {
               echo'connection failed';
          }
      $query="SELECT * from UserInfo where name='$username' and password='$password'";

          $result=mysqli_query($conn,$query);
          $row =$result->fetch_assoc();
          $id=$row['id'];
          if(mysqli_num_rows($result)==1)
          {
               session_start();
               $_SESSION['project']='true';
               header("location: web.php?id=$id");
          }
          else{
               echo 'Wrong username or password';
               

          }
}
?>

<tr><td><a href="login.php">Login</a></td></tr>
</lable>
</form>
<body>
</html>
