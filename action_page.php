<?php
include ('setup.php');

$fname = $_POST["fname"];
$lname = $_POST["lname"];

$sql = "INSERT INTO feedback (firstname, lastname, email)
VALUES ('$fname', '$lname', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>