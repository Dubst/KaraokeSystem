<?php
    $db_servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "karaokesystem";


    $conn = new mysqli($db_servername, $db_username, $db_password);


   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    echo "Connected successfully";

    $sql = "CREATE DATABASE IF NOT EXISTS karaokesystem";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
      } else {
        echo "Error creating database: " . $conn->error;
      }

      $conn->close();
/*--------------------------------------------------------------------END OF CREATING DATABASE-----------------------------------------*/
/*--------------------------------------------------------------------START OF CREATING TABLE------------------------------------------*/


    $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

    $sql = "CREATE TABLE IF NOT EXISTS employee (
      emp_id int UNSIGNED PRIMARY KEY NOT NULL,
      f_name varchar(30) NOT NULL,
      l_name varchar(30) NOT NULL,
      locate_address varchar(30) NOT NULL,
      email_address varchar(30) NOT NULL,
      phone_num varchar(11) NOT NULL
    )";

     if ($conn->query($sql) === TRUE) {
      echo "Table created sucessfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }

     

  /*-----------------------------------------------------------------END OF CREATING TABLE----------------------------------------------*/
?>