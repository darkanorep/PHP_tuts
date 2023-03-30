<?php

    require_once 'db.php';

    $id = $_GET['id'];
    $username = $_GET['username'];
    $password = $_GET['password'];

    $sql = "UPDATE FROM USER SET username = '$username', password = '$password' WHERE id = {$id};";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo 'Update';
    }

    


    // $sql = "UPDATE FROM;";

?>