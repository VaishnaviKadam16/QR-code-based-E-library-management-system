<?php

require_once 'dbh.inc.php';
/*if(isset($_GET['id'])){
$id = $_GET['id'];}else{
    $id=0;
}*/
//$bookid = $_SESSION['id'];
//$id = $_GET["id"];
$id = $_POST["edit_id"];
$bookname="";
$author="";
$publisher="";
$edition="";
$category="";
$description="";

$query="SELECT  * From books WHERE bookID = $id ";
$sql = mysqli_query($conn, $query);

/*while($row = mysqli_fetch_array($sql))
{*/ if(is_array($sql) || is_object($sql)){
    foreach($sql as $row){
    //$isbn=$row['isbn'];
    $isbn="0";
    $bookname=$row['bookname'];
    $author=$row['author'];
    $publisher=$row['publisher'];
    $edition=$row['edition'];
    $category=$row['category'];
    $description=$row['description'];
   
    /*$usid ='0';
        $usNM = 'Admin';
        $st='Available';
        $date=date('Y/m/d');
        $INSERT1 = "INSERT Into register (bkID,bkNM,usID,usNM,status,date) values(?,?,?,?,?,?)";

        

        $stmt1= $conn->prepare($INSERT1);
        $stmt1->bind_param("isisss",$id,$bookname, $usid,$usNM, $st,$date);
        $stmt1->execute();*/

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
                    <h3>Update Book Details</h3>
                </nav>
            </header>
    </div>
    

    <div class="edit-content">
    
        <div class="top">
        <h4 style="padding-left:10px;">Update Block</h4>
        <h4 style="padding-left:300px;padding-right:10px;">ISBN :</h4>
        <label style="padding-top:21px;"><b><?php echo $isbn ;?></b></label>
        <h4 style="padding-left:200px;padding-right:10px;">Book ID :</h4>
        <label name="bookid1" style="padding-top:21px;"><b><?php echo $id;?></b></label>        
        </div>
        <form action="ad-bk-edit.inc.php" method="POST" class="editform">
        <div class="center-left">
        <input type="hidden" value="<?php echo $id ;?>" name="bookid1"  style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >
        <h4 style="margin-left:30px;margin-right:10px;">Book Name </h4>
        <input type="text" value="<?php echo $bookname ;?>" name="bookname1"  style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >
        <h4 style="margin-left:30px;margin-right:10px;">Author Name </h4>
        <input type="text" value="<?php echo $author ;?>" name="author1" style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >
        <h4 style="margin-left:30px;margin-right:10px;">Publisher </h4>
        <input type="text" value="<?php echo $publisher ;?>" name="publisher1" style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >
        <h4 style="margin-left:30px;margin-right:10px;">Edition </h4>
        <input type="text" value="<?php echo $edition ;?>" name="edition1" style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >
        </div>

        <div class="center-right">
        <h4 style="margin-left:30px;margin-right:10px;">Category </h4>
        <input type="text" value="<?php echo $category ;?>" name="category1" style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >
        <h4 style="margin-left:30px;margin-right:10px;">Description </h4>
        <input type="text" value="<?php echo $description ;?>" name="description1" style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >

        <div class="btn">
        <button type="submit" name="update" class="update">Update</button>
        <a href="ad-bk-manage.php" class="cancelbtn"  >Cancel</a></div>
        

        </div>
        
        
        </form>
    </div>
        <?php
    }}
        
        