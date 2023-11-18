<?php
    session_start();
    $id = $_SESSION["ID"];
    echo $id;
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
        
        <form class="formstyle"action="reservedb.php" method="POST">
            <div class="title">Reserve Room for Customers</div>
                <div class="name">
                <label class="f_text" for="name">Customer Name</label><br>
                <input class="t_field" type="text" id="" name="name" required>
                </div>
            <br><br>
                <div class="homeaddress">
                <label class="f_text" for="address">Date</label><br>
                <input class="t_field" type="datetime-local" id="" name="datetime" required>
                </div>
            <br><br>
                <div class="name">
                    <label class="f_text" for="room">ROOM ID</label><br>
                    <input class="t_field" type="text" id="" name="room_ID" required>
                    </div>
                <br><br>
                <input type="hidden" id="choice" name="userID" value="<?php echo $id?>">
            <input class="button" type="submit" value="ADD">
        </form>
    </div>
</body>
</html>