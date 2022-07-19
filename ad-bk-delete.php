<?php


require_once 'dbh.inc.php';
if(isset($_POST['delete_btn'])){
    $id = $_POST['deleteid'];

    $query = "DELETE FROM books WHERE bookID = $id ";

    if(mysqli_query($conn, $query)){
        header('location: ad-bk-manage.php');
    }
}