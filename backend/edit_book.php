<?php

    include('../db/connection.php');

    if(isset($_POST['id'])) {
        $book_id = $_POST['id'];
        $book_name = $_POST['name'];
        $book_description = $_POST['description'];
        $book_author = $_POST['author'];
        $book_publication = $_POST['publication'];

        $query = "UPDATE books 
                    SET name_book = '$book_name', 
                        description_book = '$book_description', 
                        author_book = '$book_author', 
                        publication_year_book = '$book_publication'
                    WHERE id_books = '$book_id'; ";

        $res = mysqli_query($conn, $query);

        if (!$res) {
            die('Query Failed'. mysqli_error($conn));
        }
        echo "Book Update Successfully";  

    }

?>