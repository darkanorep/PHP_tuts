<?php

    require_once 'db.php';

    header('Content-Type: application/json; charset=utf-8');

    

    // echo json_encode(array(
    //     "username" => $username,
    //     "password" => $password
    // ));
    
    
    
    $sql = "SELECT * FROM USER;";
    $result = mysqli_query($conn, $sql);
    // $resultCheck = mysqli_num_rows($result);
    // echo json_encode($resultCheck);

    // if ($resultCheck > 0) {
        
    // }

    $users = array();
    while($row = mysqli_fetch_assoc($result)) {
        $user = array(
            'id' => $row['id'],
            'username' => $row['username'],
            'password' => $row['password']
        );
        array_push($users, $user);
    }
    echo json_encode($users);


?>