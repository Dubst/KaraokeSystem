<?php
    include("database.php");

    $roomstatus = $_POST["Status"];
    $roomtype = $_POST["Type"];

    $sql = "INSERT INTO room(status, roomtype) VALUES('$roomstatus', '$roomtype')";
    
    $conn->query($sql);

    $conn->close();
    header('Location: homepage.php');
?>