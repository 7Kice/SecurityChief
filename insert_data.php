<?php
require_once('connection.php');
require("create-database.php");
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST["email"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $companyName = $_POST["companyName"];
    $websiteUrl = $_POST["websiteUrl"];

    // Insert data into the table
    $sql = "INSERT INTO security_test (email, firstName, lastName, companyName, websiteUrl) VALUES ('$email', '$firstName', '$lastName', '$companyName', '$websiteUrl')";

    if ($db_conna->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$db_conn->close();
?>
