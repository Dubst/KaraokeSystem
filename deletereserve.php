<?php
    if(isset($_GET["reserveid"])){
        $rID = $_GET["reserveid"];
        
        include('database.php');

        $sql = "DELETE FROM reserveroom WHERE reservedID = $rID";
        $conn->query($sql);

    }

    header('Location: homepage.php');
    exit;
?>