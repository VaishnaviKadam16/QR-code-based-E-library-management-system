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
$sql="UPDATE users SET name='$bookname1',branch='$author1',year='$publisher1',rollno='$edition1',phone='$category1',email='$description1' WHERE userID = '$id1' ";


if(mysqli_query($conn,$sql)){
    $_SESSION['success'] = "your data is updated";
    header("location: ad-us-manage.php");
}
else{
   echo "Error";
}
}