<?php
    $db_servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "karaokesystem";

    $conn = new mysqli($db_servername, $db_username, $db_password);


   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   // echo "Connected successfully";

    $sql = "CREATE DATABASE IF NOT EXISTS karaokesystem";
    if ($conn->query($sql) === TRUE) {
       // echo "Database created successfully";
      } else {
        echo "Error creating database: " . $conn->error;
      }

      $conn->close();
/*--------------------------------------------------------------------END OF CREATING DATABASE-----------------------------------------*/
/*--------------------------------------------------------------------START OF CREATING TABLE------------------------------------------*/


    $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

    $sql = "CREATE TABLE IF NOT EXISTS user (
      user_ID int PRIMARY KEY AUTO_INCREMENT,
      name varchar(30) NOT NULL,
      address varchar(30) NOT NULL,
      contactNum varchar(11) NOT NULL,
      sex ENUM('Male','Female','Others') NOT NULL,
      pass varchar(30) NOT NULL,
      role ENUM('EMPLOYEE', 'ADMIN') DEFAULT 'EMPLOYEE'
    )";

     if ($conn->query($sql) === TRUE) {
      //echo "Table created sucessfully";
      $sql_alt = "ALTER TABLE user AUTO_INCREMENT = 1000";
      $conn->query($sql_alt);
    } else {
      echo "Error creating table: " . $conn->error;
    }

     

  /*-----------------------------------------------------------------END OF CREATING TABLE----------------------------------------------*/

  $sql = "CREATE TABLE IF NOT EXISTS room (
    room_ID int PRIMARY KEY AUTO_INCREMENT,
    status ENUM('Active','Inactive') NOT NULL,
    roomtype ENUM('Good for 3 - 5 persons','Good for 6 - 12 persons') NOT NULL
  )";

   if ($conn->query($sql) === TRUE) {
    //echo "Table created sucessfully";
    $sql_alt = "ALTER TABLE room AUTO_INCREMENT = 2000";
    $conn->query($sql_alt);
  } else {
    echo "Error creating table: " . $conn->error;
  }


  $sql = "CREATE TABLE IF NOT EXISTS reserveroom (
          reservedID int PRIMARY KEY AUTO_INCREMENT,
          room_ID int NOT NULL,
          user_ID int NOT NULL,
          customer_name varchar(30) NOT NULL,
          reserveDate datetime NOT NULL,
          FOREIGN KEY(room_ID) REFERENCES room(room_ID),
          FOREIGN KEY(user_ID) REFERENCES user(user_ID)
          
    )";

if ($conn->query($sql) === TRUE) {
  //echo "Table created sucessfully";
  $sql_alt = "ALTER TABLE reserveroom AUTO_INCREMENT = 3000";
  $conn->query($sql_alt);
} else {
  echo "Error creating table: " . $conn->error;
}


?>