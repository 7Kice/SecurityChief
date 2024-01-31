<?php
session_start(); // Start the session
require("connection.php");
require("create-database.php");

// Initialize error message variable
$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["Username"], ENT_QUOTES, 'UTF-8');
    $password = $_POST["Password"];
    $confirmPassword = $_POST["ConfirmPassword"];

    // Validate input
    if (empty($username) || empty($password) || empty($confirmPassword)) {
        $errorMsg = "Please fill in all the fields.";
        $_SESSION['error'] = $errorMsg;
        header("Location: register.php");
        exit();
    }

    // Check if passwords match
    if ($password !== $confirmPassword) {
        $errorMsg = "Passwords do not match.";
        $_SESSION['error'] = $errorMsg;
        header("Location: register.php");
        exit();
    }

    // Use prepared statement to insert data
    $stmt = $db_conn->prepare("INSERT INTO users (username_hash, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username_hash, $hashedPassword);

    $username_hash = hash('sha256', $username);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT); // Use bcrypt for password hashing

    if ($stmt->execute()) {
        header("Location: login.php");
        exit();
    } else {
        $errorMsg = "Error registering user.";
        $_SESSION['error'] = $errorMsg;
        header("Location: register.php");
        exit();
    }
}

$stmt->close();
$db_conn->close();
?>
