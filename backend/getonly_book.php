  
<?php

    include('../db/connection.php');

    if(isset($_POST['book_id'])) {
        $id = $_POST['book_id'];

        $query = "SELECT * from books WHERE id_books  = {$id}";

        $res = mysqli_query($conn, $query);
        if(!$res) {
            die('Query Failed'. mysqli_error($conn));
        }

        $json = array();
        while($row = mysqli_fetch_array($res)) {
            $json[] = array(
                'id_books' => $row['id_books'],
                'name_book' => $row['name_book'],
                'description_book' => $row['description_book'],
                'author_book' => $row['author_book'],
                'publication_year_book' => $row['publication_year_book']
            );
        }
        
        $json_string = json_encode($json[0]);
        echo $json_string;
    }

?>