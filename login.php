<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include('header.php') ?>
    <div class="LoginContainer">
        <form class="LoginForm" action="action-login.php" method="POST">
            <h1 class="MarginBottom">Login</h1>
            <?php
            // Display error message if exists
            session_start(); // Resume the session
            if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
                echo '<p class="ErrorMessage">' . $_SESSION['error'] . '</p>';
                unset($_SESSION['error']); // Clear the error message after displaying
            }
            ?>
            <h1>Username</h1><input type="text" class="Username" name="Username" placeholder="Username" required>
            <h1>Password</h1><input type="password" class="Password" name="Password" placeholder="Password" required>
            <br>
            <input class="Submit" type="submit" name="Submit" value="Login">
            <a class="RegisterButton" href="register.php">Register</a>
            <a class="RegisterButton gap" href="index.php">Back</a>
        </form>
    </div>
    <?php include('footer.php') ?>
</body>

</html>
