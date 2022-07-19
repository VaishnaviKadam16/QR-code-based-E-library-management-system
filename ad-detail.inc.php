<?php

require_once 'dbh.inc.php';

if(isset($_POST['update'])){
    $return = $_POST["return1"]; 
    $id = $_POST["return2"]; 
    $set = date('Y/m/d'); 
    if($return <=$set){
        $status1 = "Returned";
      }
      else if($return >$set){
        $status1 = "Returned Late";
      }
    else{
        $status1 = "Error";
    }
    $sql1="UPDATE register SET status = '$status1', returndate = '$return' WHERE transactionID = '$id' ";
    
    
        if(mysqli_query($conn,$sql1)){
            $_SESSION['success'] = "your data is updated";
            header("location: ad-register.php");
        }
        else{
            echo "Error";
        }
    }