<?php

    include('../db/connection.php');

    if(isset($_POST['book_id'])) {
        $id = $_POST['book_id'];
        $query = "DELETE FROM books WHERE id_books = $id"; 
        $res = mysqli_query($conn, $query);

        if (!$res) {
            die('Query Failed'. mysqli_error($conn));
        }
        echo "Task Deleted Successfully";  

    }

?>