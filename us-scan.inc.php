<?php
include_once 'us-header.php';

session_start();


require_once 'dbh.inc.php';



if($_SERVER['REQUEST_METHOD']=="POST"){
  $id =$_POST["bookid"];
  echo $id;
  $bookname =$_POST["bookname"];
  $usid =$_SESSION["usid"];
  $isdate =$_POST["issuedate"];
  $setdate = $_POST["setdate"];
    $query = mysqli_query($conn,"SELECT * FROM users WHERE userID = $usid");
    $get = mysqli_fetch_array($query);
    $data = $get['name'];
    $status = "";
    $return =$_POST["issuedate"];
    $date =date('Y/m/d');
   if($isdate==$date || $isdate <=$setdate){
    $status = "Issued";
   }
  
  $stmt = $conn->prepare("INSERT Into register (bkID, bkNM, usID, usNM, issuedate, setdate,returndate, status )  VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param('isisssss', $id, $bookname, $usid, $data, $isdate, $setdate, $return, $status);

    if (!$stmt->execute()) {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    }

        else{
          header("location: us-scan.php");
        }

$stmt->close(); // Statement
$conn->close(); // MySQLi
      
       }
      