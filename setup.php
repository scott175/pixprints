<?php
$servername = "localhost";
$username = "sec_user";
$password = "greenChair153";
$dbname = "atestdb";

// Create conection
$conn = new mysqli ($servername, $username, $password, $dbname);

// Check conection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected Succefully to $dbname";
?>