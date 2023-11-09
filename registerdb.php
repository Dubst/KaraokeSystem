<?php
include("database.php");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"]; 
$address = $_POST["address"];

//$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

$sql = "INSERT INTO employee VALUES (1234, '$fname', '$lname','$email', '$address', '09661444890')";

$conn->query($sql);

$conn->close();

?>