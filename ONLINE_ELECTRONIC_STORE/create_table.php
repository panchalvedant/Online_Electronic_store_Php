<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Checking connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql code to create table
$sql = "CREATE TABLE UserInfo (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    Address VARCHAR(255) NOT NULL,
    no NUMERIC NOT NULL,
    password VARCHAR(255) NOT NULL
    
);";

if (mysqli_query($conn, $sql)) {
    echo "Table  created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>