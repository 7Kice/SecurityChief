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
                $sql = "SELECT firstName, lastName, websiteUrl, companyName FROM security_test";
                $result = $conn->query($sql);
                ?>
                <div class="FirstName">
                    <h2 class="FirstNameText">First name</h2>
                    <h2 class="FirstNameData">
                        <?php
                        $result->data_seek(0);

                        while ($row = $result->fetch_assoc()) {
                            echo $row['firstName'] . "<br>";
                        }
                        ?>
                    </h2>
                </div>

                <div class="LastName">
                    <h2 class="LastNameText">Last name</h2>
                    <h2 class="LastNameData">
                        <?php
                        $result->data_seek(0);

                        while ($row = $result->fetch_assoc()) {
                            echo $row['lastName'] . "<br>";
                        }
                        ?>
                    </h2>
                </div>

                <div class="WebsiteURL">
                    <h2 class="WebsiteURLText">WebsiteURL</h2>
                    <h2 class="WebsiteURLData">
                        <?php
                        $result->data_seek(0);

                        while ($row = $result->fetch_assoc()) {
                            echo $row['websiteUrl'] . "<br>";
                        }
                        ?>
                    </h2>
                </div>

                <div class="CompanyName">
                    <h2 class="CompanyNameText">Company name</h2>
                    <h2 class="CompanyNameData">
                        <?php
                        $result->data_seek(0);

                        while ($row = $result->fetch_assoc()) {
                            echo $row['companyName'] . "<br>";
                        }
                        ?>
                    </h2>
                </div>

                <?php
                $conn->close();
                ?>

            </div>
        </div>
    </div>
</body>

</html>