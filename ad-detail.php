<?php

require_once 'dbh.inc.php';
if(isset($_POST["detail2"])){
$id = $_POST["detail1"];


$query="SELECT  * From register WHERE transactionID = $id ";
$sql = mysqli_query($conn, $query);

/*while($row = mysqli_fetch_array($sql))
{*/ if(is_array($sql) || is_object($sql)){
    foreach($sql as $row){
    
    $bkid=$row['bkID'];
    $bknm=$row['bkNM'];
    $usid=$row['usID'];
    $usnm=$row['usNM'];
    $iss=$row['issuedate'];
    $set=$row['setdate'];
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" type="text/css" href="ad-style.php">    
</head>
<body>

    <div class="contain">
            <header class="main-header">
                <a href="/" style="text-decoration:none" >
                <div class="name">Library</div></a>
                <nav class="main-nav">
                    <h3>Details</h3>
                </nav>
            </header>
    </div>
    

    <div class="edit-content">
    
      
        
        <div class="center-left">
        
        <h4 style="margin-left:30px;margin-right:10px;">User ID </h4>
        <label style="margin-left:30px;margin-right:10px;width:400px;font-size:30px">
        <?php echo $usid ?></label>
        <input   style="margin-left:30px;margin-right:10px;width:400px;height:1px;margin-bottom:20px;" >
        <h4 style="margin-left:30px;margin-right:10px;">User Name </h4>
        <label style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;font-size:20px">
        <?php echo $usnm ?></label>
        <input style="margin-left:30px;margin-right:10px;width:400px;height:1px;margin-bottom:10px;" >
        <h4 style="margin-left:30px;margin-right:10px;">Book ID </h4>
        <label style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;font-size:20px">
        <?php echo $bkid ?></label>
        <input style="margin-left:30px;margin-right:10px;width:400px;height:1px;margin-bottom:10px;" >
        <h4 style="margin-left:30px;margin-right:10px;">Book Name </h4>
        <label style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;font-size:20px">
        <?php echo $bknm ?></label>
        <input style="margin-left:30px;margin-right:10px;width:400px;height:1px;margin-bottom:10px;" >
        </div>

        <div class="center-right">
        <h4 style="margin-left:30px;margin-right:10px;">Issue Date </h4>
        <label style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;">
        <?php echo $iss ?></label>
        <input style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >

        <form action="ad-detail.inc.php" method="POST" class="editform">
        <h4 style="margin-left:30px;margin-right:10px;">Reutrn Date </h4>
        <input type="date" value="<?php echo $set ;?>" name="return1" style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >
        <input type="hidden" value="<?php echo $id ;?>" name="return2" style="margin-left:30px;margin-right:10px;padding-bottom:10px;width:400px;" >

        <div class="btn">
        <button type="submit" name="update" class="update">Reutrn</button>
        <a href="ad-register.php" class="cancelbtn"  >Cancel</a></div>
        

        </div>
        </form>
        
        
    </div>
        <?php
    }}
    
}    