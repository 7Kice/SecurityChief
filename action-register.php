<?php
require("connection.php");
require("create-database.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["Username"], ENT_QUOTES, 'UTF-8');
    $password = $_POST["Password"];

    $username_hash = hash('sha256', $username);

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $insertSql = "INSERT INTO users (username_hash, password) VALUES ('$username_hash', '$hashedPassword')";
    if ($db_conn->query($insertSql) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error registering user: " . $db_conn->error;
    }
}


$db_conn->close();
?>