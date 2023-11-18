<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Role</title>
</head>
<body>
    <div class="container">
        <form class="formstyle" action="login.php" method="POST">
            <div class="container1">
                <input class="login_button" style="width: 80%; margin-top: 6rem;" type="submit" name="submit" value="EMPLOYEE"><br>
                <input class="login_button" style="width: 80%; margin-top: 15rem;" type="submit" name="submit" value="ADMIN">
            </div>
        </form>  
</div>
</body>
</html>