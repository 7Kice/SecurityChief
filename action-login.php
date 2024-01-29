
<?php
// Database configuration
$servername = "localhost";
$username = "root";  // Default XAMPP MySQL username
$password = "";      // Default XAMPP MySQL password
$dbname = "SecurityChief";

// Connect to the database
$db_conn = new mysqli($servername, $username, $password, $dbname);

if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = htmlspecialchars($_POST["Username"], ENT_QUOTES, 'UTF-8');
    $password = $_POST["Password"];

    // Retrieve hashed password from the 'users' table
    $sql = "SELECT password FROM users WHERE username_hash = SHA2('$username', 256)";
    $result = $db_conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // User found, verify password
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        if (password_verify($password, $hashedPassword)) {
            // Authentication successful
            echo "Login successful for user: " . $username;
        } else {
            // Authentication failed
            echo "Invalid credentials";
        }
    } else {
        // User not found
        echo "Invalid credentials";
    }
}

// Close the database connection
$db_conn->close();
?> 
