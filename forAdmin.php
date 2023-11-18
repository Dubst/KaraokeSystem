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
        <form class="formstyle" action="forAdmin.php" method="POST">
            <div class="container1">
                <input class="login_button" style="width: 80%; margin-top: 6rem;" type="submit" name="submit" value="Homepage"><br>
                <input class="login_button" style="width: 80%; margin-top: 15rem;" type="submit" name="submit" value="Create Employee Account">
            </div>
        </form>  
        
</div>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
            $choice = $_POST["submit"];

            if($choice == "Homepage"){
                header('Location: homepage.php');
            }
            elseif($choice == "Create Employee Account"){
                header('Location: register.html');
            }
        }
        ?>

