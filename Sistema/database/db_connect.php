<?php
$servername = "localhost";
$username = "root"; 
$password = "1438";
$dbname = "users";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>