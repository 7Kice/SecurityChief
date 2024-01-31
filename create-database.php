<?php
$servername = "localhost";
$username = "root";
$password = "";  
$dbname = "SecurityChief";

$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $conn->error;
}


$conn->close();

$db_conn = new mysqli($servername, $username, $password, $dbname);

if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username_hash VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
if ($db_conn->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $db_conn->error;
}

$sql2 = "CREATE TABLE IF NOT EXISTS security_test (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    companyName VARCHAR(100),
    websiteUrl VARCHAR(255)
)";
if ($db_conn->query($sql2) === TRUE) {
} else {
    echo "Error creating table: " . $db_conn->error;
}

?>