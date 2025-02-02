<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn === false) {
    error_log("Connection failed: " . mysqli_connect_error());  
    die("Connection failed: Please try again later."); 
}
?>