<?php

    $HOST_DB = 'localhost'; 
    $USER_DB = 'root';
    $PASSWORD_DB = '';
    $NAME_DB = 'books-db';

    $conn = mysqli_connect(
        $HOST_DB,
        $USER_DB,
        $PASSWORD_DB,
        $NAME_DB
    ) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn));; 

    /* if ($conn ) {
        echo "Database is connected";
    } */
?>