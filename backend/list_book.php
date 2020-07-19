<?php

    include('../db/connection.php');

    $query = "SELECT * from books";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die('Query Failed'. mysqli_error($conn));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'id_books' => $row['id_books'],
            'name_book' => $row['name_book'],
            'description_book' => $row['description_book'],
            'author_book' => $row['author_book'],
            'publication_year_book' => $row['publication_year_book']
        );
    }
    $json_string = json_encode($json);
    echo $json_string;
?>