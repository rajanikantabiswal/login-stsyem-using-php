<?php
$servername = "localhost"; 
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "login-system"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>