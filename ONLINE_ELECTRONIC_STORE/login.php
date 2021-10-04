<html>
<head><title>User Login</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<ul>
     <li><a href="home.php">Home</a></li>
     <li><a href="AboutUs.php">About Us</a></li>
</ul> 
<form action="validatelogin.php" method="POST">
  
<table >
<div class="logo"></div>
<div class="fm">

<b>Online Electronic Device</b>
</div>
<tr> <td> <lable> Username :</lable><input type="text" name="name" placeholder="Username" required/></td></tr>
<tr> <td> <lable> Password :</lable><input type="password" name="password" placeholder="password"required/></td></tr>
<tr> <td> <input type="submit"  value="Login" name="submit" placeholder="Login"/>
<input type="reset"  value="Reset" name="reset" placeholder="Reset"/>   
<input type="button" onclick="window.location.href='new.php';" value="New User" />
 </td></tr>

 
</table>
</form>
<body>
</html>