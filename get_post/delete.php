<?php

    require_once 'db.php';

    $id = $_GET['id'];
    

    $delete = "DELETE FROM USER WHERE id = {$id};";

    $query = mysqli_query($conn, $delete);

    if ($query) {
        echo 'successfully deleted';
    }

?>
