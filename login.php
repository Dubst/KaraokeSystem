<?php
    $choice = $_POST["submit"];
                        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
            <form class="formstyle" action="login_authentication.php" method="POST">
                <div class="container1">
                   <div class="title" style="font-size: 5rem">Log In</div>
                    <div class="login_id">
                        <label class="f_text" style="font-size: 2rem; margin-left: 1rem;" for="admin">ID NO: </label><br><br>
                        <input class="t_field" type="number" class="" id="" name="ID" required>
                    </div>
                    <br><br>
                    <div class="login_pass">
                        <label class="f_text" style="font-size: 2rem; margin-left: 1rem;"  for="password">Password: </label><br><br>
                        <input class="t_field" type="password" class="" id="" name="Password" required>
                        <input type="hidden" id="choice" name="choice" value="<?php echo $choice;?>">
                    </div>
                <input class="login_button" type="submit" name="submit" value="login">
                </div>
                <div style="width: 80%; background-color: red; font-size: 2rem; margin: auto;">
                    
                        
            </form>
        
    </div>
</body>
</html>