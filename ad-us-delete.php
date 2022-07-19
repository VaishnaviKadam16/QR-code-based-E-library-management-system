<?php


require_once 'dbh.inc.php';
if(isset($_POST['delete_btn'])){
    $id = $_POST['deleteid'];

    $query = "DELETE FROM users WHERE userID = $id ";

    if(mysqli_query($conn, $query)){
        header('location: ad-us-manage.php');
    }
}