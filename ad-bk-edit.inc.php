<?php

require_once 'dbh.inc.php';
if(isset($_POST['update'])){
$id1 = $_POST["bookid1"];
$bookname1 = $_POST['bookname1'] ;
$author1 = $_POST['author1'] ;
$publisher1 = $_POST['publisher1'] ;
$edition1 = $_POST['edition1'] ;
$category1 = $_POST['category1'] ;
$description1 = $_POST['description1'] ;
$sql="UPDATE books SET bookname='$bookname1',author='$author1',publisher='$publisher1',edition='$edition1',category='$category1',description='$description1' WHERE bookID = '$id1' ";


if(mysqli_query($conn,$sql)){
    $_SESSION['success'] = "your data is updated";
    header("location: ad-bk-manage.php");
}
else{
   echo "Error";
}
}