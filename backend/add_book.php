<?php

    include('../db/connection.php');

    if(isset($_POST['name'])) {
        
        $book_name = $_POST['name'];
        $book_description = $_POST['description'];
        $book_author = $_POST['author'];
        $book_publication = $_POST['publication'];
        
        $query = "INSERT into books(name_book, description_book, author_book, publication_year_book) VALUES ('$book_name', '$book_description', '$book_author', '$book_publication')";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die('Query Error'.mysqli_error($conn));
        }

        echo "Book Added Successfully";  

    }

?>