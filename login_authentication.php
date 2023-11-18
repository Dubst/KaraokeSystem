<?php
include('database.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div style="background-color:  white; border-radius: 3rem;  box-sizing: border-box; width: 80vw; height: 80vh; margin: auto; margin-top: 5rem">
<div style="border-radius: 3rem; font-size: 5rem; color: #A91B60; box-sizing: border-box; width: 100%; height: 100%; margin: auto;
                            background: linear-gradient(360deg, rgba(236, 158, 192, 0.00) 1.04%, #EC9EC0 89.58%);
                            text-align:center;
                            padding: 5rem">
<?php
        
        
        if(isset($_POST["submit"])){
            
            if(!empty($_POST["ID"]) && !empty($_POST["Password"])){

                $checkID = $_POST["ID"];
                $checkp = $_POST["Password"];
                $choice = $_POST["choice"];
                

               
            if($choice == "ADMIN"){
                    $sql = "SELECT * FROM user WHERE user_ID = '$checkID' AND role = '$choice'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row["user_ID"] == "$checkID" && $row["pass"] == "$checkp"){
                            $_SESSION["ID"] = $checkID;
                            $_SESSION["Password"] = $checkp;
                          
                            header('Location: forAdmin.php');
                            
                        }else{
                            echo "Invalid Credentials, Redirecting to Main Page in 5 seconds";
                            header('refresh:5;URL=index.php');
                            
                        }
                        
                    }
                }else{
                     echo "Invalid Credentials, Redirecting to Main Page in 5 seconds";
                     header('refresh:5;URL=index.php');
                }
            }
            else if($choice == "EMPLOYEE"){
                $sql = "SELECT * FROM user WHERE user_ID = '$checkID' AND role = '$choice'";
                $result = mysqli_query($conn, $sql);if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){
                    if($row["user_ID"] == "$checkID" && $row["pass"] == "$checkp"){
                        $_SESSION["ID"] = $checkID;
                        $_SESSION["Password"] = $checkp;
                      
                        header('Location: homepage.php');
                
                        
                    }
                    else{
                        echo "Invalid Credentials, Redirecting to Main Page in 5 seconds";
                        header('refresh:5;URL=index.php');
                      }
                }
            }else{
                echo "Invalid Credentials, Redirecting to Main Page in 5 seconds";
                header('refresh:5;URL=index.php');
            }
        }
                    
              
                
                
            }
            else{
                echo("missing inputs");
            }
        }
    ?>
    </div>
</div>
</body>
</html>
