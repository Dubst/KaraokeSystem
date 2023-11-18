<?php
    include('database.php');

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(!isset($_GET["reserveid"])){
           header('Location: homepage.php');
            exit;
          
        }
        $reserveID = $_GET["reserveid"];

        $sql = "SELECT customer_name, reserveDate, room_ID FROM reserveroom WHERE reservedID=$reserveID";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if(!$row){
            header('Location: homepage.php');
            exit;
        }

        $cust_name = $row["customer_name"];
        $reservedate = $row["reserveDate"];
        $roomID = $row["room_ID"];

    }   
    else {
        
        $reserveID = $_POST["reserveID"];
        $cust_name = $_POST["name"];
        $reservedate = $_POST["datetime"];
        $roomID = $_POST["room_ID"];

        do{
            $sql = "UPDATE reserveroom
                    SET customer_name = '$cust_name', reserveDate='$reservedate', room_ID='$roomID'
                    WHERE reservedID = $reserveID";

                    $conn->query($sql);
                    header('Location: homepage.php');
                    exit;

        }while(false);

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        
        <form class="formstyle"action="editreserve.php" method="POST">
        <input type="hidden" id="choice" name="reserveID" value="<?php echo $reserveID?>">
            <div class="title">RESERVE EDIT</div>
                <div class="name">
                <label class="f_text" for="name">Customer Name</label><br>
                <input class="t_field" type="text" id="" name="name" value="<?php echo $cust_name ?>" required>
                </div>
            <br><br>
                <div class="homeaddress">
                <label class="f_text" for="address">Date</label><br>
                <input class="t_field" type="datetime-local" id="" name="datetime" value="<?php echo $reservedate ?>" required>
                </div>
            <br><br>
                <div class="name">
                    <label class="f_text" for="room">ROOM ID</label><br>
                    <input class="t_field" type="text" id="" name="room_ID" value="<?php echo $roomID ?>" required>
                    </div>
                <br><br>
               
            <input class="button" type="submit" value="ADD">
        </form>
    </div>
</body>
</html>