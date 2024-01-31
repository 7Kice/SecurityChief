<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    include('header.php')
    ?>
    <div class="AdminContainer">
        <div class="AdminPanel">
            <h2 class="PanelName">
                Admin Panel
            </h2>
            <a href="login.php" class="LogoutButton">Logout</a>
            <div class="AdminContent">
                <?php
                require("connection.php");
                $sql = "SELECT firstName, lastName, websiteUrl, companyName FROM security_test";
                $result = $conn->query($sql);
                ?>
                <div class="FirstName">
                    <h2 class="FirstNameText">First name</h2>

                    <?php
                    $result->data_seek(0);

                    while ($row = $result->fetch_assoc()) {
                        echo '<h2 class="FirstNameData">' . $row['firstName'] . "</h2>";
                    }
                    ?>
                </div>

                <div class="LastName">
                    <h2 class="LastNameText">Last name</h2>
                    <?php
                    $result->data_seek(0);

                    while ($row = $result->fetch_assoc()) {
                        echo '<h2 class="LastNameData">'
                            . $row['lastName'] . "</h2>";
                    }
                    ?>
                </div>

                <div class="WebsiteURL">
                    <h2 class="WebsiteURLText">WebsiteURL</h2>
                    <?php
                    $result->data_seek(0);

                    while ($row = $result->fetch_assoc()) {
                        echo '<h2 class="WebsiteURLData">' . $row['websiteUrl'] . "</h2>";
                    }
                    ?>

                </div>

                <div class="CompanyName">
                    <h2 class="CompanyNameText">Company name</h2>
                    <?php
                    $result->data_seek(0);

                    while ($row = $result->fetch_assoc()) {
                        echo '<h2 class="CompanyNameData">'  . $row['companyName'] . "  </h2>";
                    }
                    ?>

                    <?php
                    $conn->close();
                    ?>

                </div>
            </div>
        </div>
    </div>
    <?php
    include('footer.php')
    ?>
</body>

</html>