<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Homepage</title>
    
</head>
<body>
    <div style="display: flex;  margin: auto;width: 100vw; height: 10vh;">
        <div class="container2">
            <img style="margin: auto; margin-right: 0; width: 15%; height: 100%;" src="img/Mic_alt_fill.png">
            <h1 class="header">Karaoke System</h1>
        </div>
        <div class="container3">
            <div class="dashboard">
                Dashboard
            </div>
                <form class="out_btn" style="padding: 1px; justify-items: center;" action="session_destroy.php" method="POST">
                    <input type="submit" class="out_btn" style="margin:auto; color: white; width: 100%;" name="logout" value="Log Out"> 
                </form>
            <!-- <button class="out_btn" id="outbtn">Log Out</button> -->
            
           
        </div>
        </div>
    <div class="container1">
        <div class="container4">
            <button class="hmpge_btn" id="homebtn"><img src="img/chart_png.png"><br>HOME</button>
            <button class="hmpge_btn" id="bookingbtn"><img src="img/Paper_light.png"><br>BOOKINGS</button>
            <button class="hmpge_btn" id="roombtn"><img src="img/Desk_alt_light.png"><br>ROOM</button>
            <button class="hmpg_btn"  id="orderbtn"><img src="img/drink_light.png"><br>Order</button>
        </div>
        <div class="container5">
            <div class="containers">
                <div class="containers1">
                    <img style="margin:auto; width: 30%; margin-left: 3rem" src="img/black_paper_light.png">
                    <div class="contents">
                        <h1 style="font-size: 3rem;"><?php include('database.php'); $sql = "SELECT * FROM reserveroom"; $result = $conn->query($sql); $rowcount=mysqli_num_rows($result); echo $rowcount; ?> </h1> <br> <h3 style="font-size: 1rem;">Bookings</h3>
                    </div>
                </div>
                <button class="reserve_btn" onClick="javascript:window.open('reserve.php', '_self');" >
                    <img style="width: 30%; height: 100%" src="img/Calendar_add_light.png">
                    <div class="containers1">
                    <h1 style="font-size: 2.5rem">Reserve Room</h1>
                    </div>
                </button>
            </div>
                    <div class="emptycontainer">
                        <div class="container my-5">
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Recorded By:</th>
                                        <th>Reserve Date and Time:</th>
                                        <th>ROOM ID:</th>
                                        <th>ROOM TYPE:</th>
                                        <th>ROOM STATUS:</th>
                                        <th>CUSTOMER NAME:</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include('database.php');

                                        $sql = "SELECT reserveroom.reservedID, reserveroom.customer_name, 
                                        reserveroom.reserveDate, user.name, reserveroom.room_ID,
                                        room.roomtype, room.status FROM reserveroom
                                        INNER JOIN user
                                        ON user.user_ID = reserveroom.user_ID
                                        INNER JOIN room
                                        ON room.room_ID = reserveroom.room_ID";

                                        $result = $conn->query($sql);

                                        while($row = $result->fetch_assoc()){
                                            echo "
                                            <tr>
                                            <td>$row[name]</td>
                                            <td>$row[reserveDate]</td>
                                            <td>$row[room_ID]</td>
                                            <td>$row[roomtype]</td>
                                            <td>$row[status]</td>
                                            <td>$row[customer_name]</td>
                                            <td>
                                                <a class='btn btn-primary btn-sm' href='editreserve.php?reserveid=$row[reservedID]'>Edit</a></td>
                                                <td><a class='btn btn-danger btn-sm' href='deletereserve.php?reserveid=$row[reservedID]'>Cancel</a></td>
                                            
                                        </tr>
                                            ";
                                        }
                                        
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
        
        
    </div>

    

    <script type="text/javascript">
    document.getElementById("roombtn").onclick = function () {
        location.href = "createroom.html";
    };
    document.getElementById("homebtn").onclick = function () {
        location.href = "homepage.php";
    };
    document.getElementById("bookingbtn").onclick = function () {
        location.href = "bookinglist.php";
    };
    document.getElementById("outbtn").onclick = function () {

    };
   
    
   
    </script>
</body>
</html>