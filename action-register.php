<?php
// Database configuration
$servername = "localhost";
$username = "root";  // Default XAMPP MySQL username
$password = "";      // Default XAMPP MySQL password
$dbname = "SecurityChief";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists.";
} else {
    echo "Error creating database: " . $conn->error;
}

// Close the connection
$conn->close();

// Connect to the database
$db_conn = new mysqli($servername, $username, $password, $dbname);

if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
}

// Create users table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username_hash VARCHAR(255) NOT NULL,  -- Change data type to VARCHAR for hashed username
    password VARCHAR(255) NOT NULL
)";
if ($db_conn->query($sql) === TRUE) {
    echo "Table 'users' created successfully or already exists.";
} else {
    echo "Error creating table: " . $db_conn->error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = htmlspecialchars($_POST["Username"], ENT_QUOTES, 'UTF-8');
    $password = $_POST["Password"];

    // Hash the username (for illustration purposes)
    $username_hash = hash('sha256', $username);

    // Simulate user registration (replace this with your actual registration logic)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the 'users' table
    $insertSql = "INSERT INTO users (username_hash, password) VALUES ('$username_hash', '$hashedPassword')";
    if ($db_conn->query($insertSql) === TRUE) {
        echo "User registered successfully.";

        // Redirect to another page after successful registration
        header("Location: login.php");
        exit(); // Ensure that the script stops executing after the header() function
    } else {
        echo "Error registering user: " . $db_conn->error;
    }
}

// Close the database connection
$db_conn->close();
?>