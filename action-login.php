
<?php
require("connection.php");
require("create-database.php");
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
        } else {
            echo "Invalid credentials";
        }
    } else {
        echo "Invalid credentials";
    }
}

$db_conn->close();
?> 
