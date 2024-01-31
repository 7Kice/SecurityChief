<?php
$servername = "127.0.0.1"; // Change to your MySQL server hostname
$username = "DbUser"; // Change to your MySQL username
$password = "TuMhdXnqSE5FL2A5"; // Change to your MySQL password
$dbname = "SecurityChiefTest"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
