<?php
include("database.php");

$name = $_POST["name"];
$number = $_POST["number"]; 
$address = $_POST["address"];
$gender = $_POST["Gender"];
$password = $_POST["password"];

//$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

$sql = "INSERT INTO user(name, address, contactNum, sex, pass) VALUES ('$name','$address','$number', '$gender', '$password')";

$conn->query($sql);
header('Location: index.php');
$conn->close();

?>