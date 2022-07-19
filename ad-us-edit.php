<?php

require_once 'dbh.inc.php';
/*if(isset($_GET['id'])){
$id = $_GET['id'];}else{
    $id=0;
}*/
//$bookid = $_SESSION['id'];
//$id = $_GET["id"];
$id = $_POST["edit_id"];
$name="";
$branch="";
$year="";
$rollno="";
$phone="";
$email="";

$query="SELECT  * From users WHERE userID = $id ";
$sql = mysqli_query($conn, $query);

/*while($row = mysqli_fetch_array($sql))
{*/ if(is_array($sql) || is_object($sql)){
    foreach($sql as $row){
    
    $name=$row['name'];
    $branch=$row['branch'];
    $year=$row['year'];
    $rollno=$row['rollno'];
    $phone=$row['phone'];
    $email=$row['email'];
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details</title>
    <link rel="stylesheet" type="text/css" href="ad-style.php">    
</head>
<body>

    <div class="contain">
            <header class="main-header">
                <a href="/" style="text-decoration:none" >
                <div class="name">Library</div></a>
                <nav class="main-nav">
                    <h3>Update User Details</h3>
                </nav>
            </header>
    </div>
    

    <div class="edit-content">
    
        <div class="top">
        <h4 style="padding-left:10px;">Update Block</h4>
        
        <h4 style="padding-left:200px;padding-right:10px;">User ID :</h4>
        <label name="bookid1" style="padding-top:21px;"><b><?php echo $id;?></b></label>        
        </div>
        <form action="ad-us-edit.inc.php" method="POST" class="editform">
        <div class="center-left">
        <input type="hidden" value="<?php echo $id ;?>" name="bookid1"  style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >
        <h4 style="margin-left:30px;margin-right:10px;">User Name </h4>
        <input type="text" value="<?php echo $name ;?>" name="bookname1"  style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >
        <h4 style="margin-left:30px;margin-right:10px;">Branch </h4>
        <input type="text" value="<?php echo $branch ;?>" name="author1" style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >
        <h4 style="margin-left:30px;margin-right:10px;">Year </h4>
        <input type="text" value="<?php echo $year ;?>" name="publisher1" style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >
        <h4 style="margin-left:30px;margin-right:10px;">Roll No. </h4>
        <input type="text" value="<?php echo $rollno ;?>" name="edition1" style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >
        </div>

        <div class="center-right">
        <h4 style="margin-left:30px;margin-right:10px;">Phone </h4>
        <input type="text" value="<?php echo $phone ;?>" name="category1" style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >
        <h4 style="margin-left:30px;margin-right:10px;">Email </h4>
        <input type="text" value="<?php echo $email ;?>" name="description1" style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >

        <div class="btn">
        <button type="submit" name="update" class="update">Update</button>
        <a href="ad-us-manage.php" class="cancelbtn"  >Cancel</a></div>
        

        </div>
        
        
        </form>
    </div>
        <?php
    }}
        
        