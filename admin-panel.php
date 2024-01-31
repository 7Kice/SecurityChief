<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="AdminContainer">
        <div class="AdminPanel">
            <h2 class="PanelName">
                Admin Panel
            </h2>
            <div class="AdminContent">
                <?php
                require("connection.php");
                // Fetch data from the database
                $sql = "SELECT firstName, lastName, websiteUrl, companyName FROM security_test";
                $result = $conn->query($sql);

                // Display the data in respective div elements
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="FirstName">
                    <h2 class="FirstNameText">First name</h2>
                    <h2 class="FirstNameData">' . $row['firstName'] . '</h2>
                </div>';
                    echo '<div class="LastName">
                    <h2 class="LastNameText">Last name</h2>
                    <h2 class="LastNameData">' . $row['lastName'] . '</h2>
                </div>';
                    echo '<div class="WebsiteURL">
                    <h2 class="WebsiteURLText">WebsiteURL</h2>
                    <h2 class="WebsiteURLData">' . $row['websiteUrl'] . '</h2>
                </div>';
                    echo '<div class="CompanyName">
                    <h2 class="CompanyNameText">Company name</h2>
                    <h2 class="CompanyNameData">' . $row['companyName'] . '</h2>
                </div>';
                }

                // Close connection
                $conn->close();
                ?>
            </div>
        </div>
    </div>
</body>

</html>