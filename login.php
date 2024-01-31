<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <div class="LoginContainer">
        <form class="LoginForm" action="action-login.php" method="POST">
            <h1>Username</h1><input type="text" class="Username" name="Username" placeholder="Username" required>
            <h1>Password</h1><input type="password" class="Password" name="Password" placeholder="Password" required>
            <br>
            <input class="Submit" type="submit" name="Submit" value="Login">
        </form>
    </div>
    </body>
</html>