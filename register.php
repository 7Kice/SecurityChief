<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    include('header.php')
    ?>
    <div class="LoginContainer">
        <form class="LoginForm" action="action-register.php" method="POST">
            <h1 class="MarginBottom">Register</h1>
            <?php
            // Display error message if exists
            session_start(); // Resume the session
            if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
                echo '<p class="ErrorMessage">' . $_SESSION['error'] . '</p>';
                unset($_SESSION['error']); // Clear the error message after displaying
            }
            ?>
            <h1>Username</h1>
            <input type="text" class="Username" name="Username" placeholder="Username" required>

            <h1>Password</h1>
            <input type="password" class="Password" name="Password" placeholder="Password" required>

            <h1>Confirm Password</h1>
            <input type="password" class="ConfirmPassword" name="ConfirmPassword" placeholder="Confirm Password" required>



            <br>
            <input class="Submit" type="submit" name="Submit" value="Register">
            <a class="RegisterButton" href="login.php">Login</a>
        </form>
    </div>
    <?php
    include('footer.php')
    ?>
</body>

</html>