<?php
$servername = "sql596.main-hosting.eu";
$database = "u876447700_integration";
$username = "u876447700_root";
$password = "Admin123";
 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
// echo "Connected successfully";