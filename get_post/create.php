<?php

    include_once 'db.php';
    
    header('Content-Type: application/json;Accept:*/*; charset=utf-8');

        print_r($_POST);
    if (isset($_POST["username"]) && isset($_POST["password"])) {

        echo 'test';

        return ;
        $username = $_GET["username"];
        $password = $_GET["password"];

            
        $insert = "INSERT INTO USER (username, password ) VALUES ('$username', '$password');";
        $query = mysqli_query($conn, $insert);

    } 
    




?>