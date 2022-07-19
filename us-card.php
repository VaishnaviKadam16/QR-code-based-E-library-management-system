<?php
include_once 'us-header.php';
require_once 'dbh.inc.php';
session_start();

$stc = 0;$stc1=0;$stc2=0;

if(isset($_SESSION["usid"])){
    $usid =$_SESSION["usid"];
    $query = mysqli_query($conn,"SELECT * FROM users WHERE userID = $usid");
    $get = mysqli_fetch_array($query);
    $data = $get['name'];
    $branch =$get['branch'];
    $year =$get['year'];
    $roll =$get['rollno'];
    $phone =$get['phone'];
    $email =$get['email'];
}
else{
    echo "Failed";
}

$query="SELECT * From register WHERE usID = $usid ORDER BY transactionid DESC";
if($query){
$sql = mysqli_query($conn, $query);

$count = 0;

$rows= mysqli_num_rows($sql);
if($rows){
while($row = mysqli_fetch_array($sql)){
    
    $st = $row['status'];
    
    if($st=="Returned" || $st=="Returned Late" || $st=="Pending" || $st=="Issued")
    {$stc++; 
        if($st=="Returned")
        {$stc1++;}
    } 
    $count++;

}
$stc2=$stc-$stc1;
}
?>
<link rel="stylesheet" type="text/css" href="us-style.php">
      <title>E-Card</title>


<div class="all">
    <div class="card">

       <div class="card-top">
         <h2><?php echo $data ?></h2>
         <h4 ><?php echo "User ID: ".$usid ?></h4>
       </div>

       <div class="courses-container">
	       <div class="course">
		       <!--<div class="course-preview">
			      <h3>Details</h3>
		       </div>-->
		       <div class="course-info">
			       <h6>Branch</h6>
			       <h5><?php echo $branch ?></h5>
                   <div class="align">
                       <div class="a1">
                             <h6>Year</h6>
			                 <h5><?php echo $year ?></h5>
			                 </div>
                       <div class="a2">
                             <h6>Roll No.</h6>
			                 <h5><?php echo $roll ?></h5>
			                 </div>
			             </div>
                   <h6>Phone</h6>
			                 <h5><?php echo $phone ?></h5>
                       <h6>Email</h6>
			        <h5><?php echo $email ?></h5>
		       </div>
	       </div>
        
        </div>
    </div>
    <div class="bkdet">
    <div class="data-top">
    <h3>  Books Issued</h3>
	     <div class="book-left"><h2><?php echo $stc; ?> </h2></div>
       <h3>  Books Returned</h3>    
		 <div class="book-left"><h2><?php echo $stc1; ?> </h2></div>
     <h3>  Currently Reading</h3>
         <div class="book-left"><h2><?php echo $stc2; ?> </h2></div>
         

	 
    </div>
    
    <div class="tb">
    <div class="content">
    <table>
        <thead>
            
            <th style="width:450px;padding-left:165px;
    padding-top:5px;">Book</th>
            <th style="width:250px;padding-left:95px;
    padding-top:5px;">Status</th>
            
    <?php 
    
    $query="SELECT * From register WHERE usID = $usid ORDER BY transactionid DESC";
$sql = mysqli_query($conn, $query);

$count = 0;
echo "<table border='1'";
$rows= mysqli_num_rows($sql);
if($rows){
while($row = mysqli_fetch_array($sql)){
    $bookid = $row['usID'];
    $tid = $row['transactionID'];
    $date1 =date('Y/m/d');
    $date2 =$row['setdate'];
    $st = $row['status'];
    
    if($st=="Returned" || $st=="Pending")
    {$stc++; 
        if($st=="Returned")
        {$stc1++;}
    } 
    
    if(date("Y/m/d" ,strtotime($date2)) < date('Y/m/d')) {
        if($st=='Issued')
        {$status1 = 'Pending';
        
        $sql1="UPDATE register SET status = '$status1' WHERE transactionID = '$tid' ";
    
        
        if(mysqli_query($conn,$sql1)){
            $_SESSION['success'] = "your data is updated";
            //header("location: us-card.php");
        }
        else{
            echo "Error";
        }
      } 
    }
     
    //$_SESSION['id']=$bookid;
    if($count == 0){
        echo "<tr>";
    echo "<td style='width:450px;text-align:left'>".$row['bkNM'].'</td>';
    echo "<td style='width:450px;text-align:right;'>".$row['status'].'</td>';
    echo " </tr>";

}
    else{
    $count = '0';
    echo "<td style='width:100px;text-align:left'>".$row['bkNM'].'</td>';
    echo "<td style='width:450px;text-align:right'>".$row['status'].'</td>';
    echo "</tr>";
}
$count++;

}
}
}

echo "</table>";
$conn->close();
?>
</thead>
    </table>
    </div>
    </div>
