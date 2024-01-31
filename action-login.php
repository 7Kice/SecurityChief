<?php
require("connection.php");
require("create-database.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["Username"], ENT_QUOTES, 'UTF-8');
    $password = $_POST["Password"];

    $sql = "SELECT password FROM users WHERE username_hash = SHA2('$username', 256)";
    $result = $db_conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        if (password_verify($password, $hashedPassword)) {
            header("Location: admin-panel.php");
            exit();
        } else {
            $_SESSION['error'] = "Either the username or password is incorrect";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Either the username or password is incorrect";
        header("Location: login.php");
        exit();
    }
}

$db_conn->close();
?>
