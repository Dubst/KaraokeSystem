<?php
    include("database.php");

    $name = $_POST["name"];
    $date = $_POST["datetime"];
    $room_ID = $_POST["room_ID"];
    $user_ID = $_POST["userID"];

    $sql = "INSERT INTO reserveroom(room_ID, user_ID, customer_name, reserveDate) VALUES('$room_ID', '$user_ID', '$name', '$date')";
    

    if($conn->query($sql) === TRUE){
        header('Location: homepage.php');
    }
    else{
        echo "ERROR INSERTING\n" . $conn->error;
    }

    $conn->close();
    
?>