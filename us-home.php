<?php
include_once 'us-header.php';
require_once 'dbh.inc.php';
 session_start();


echo "<div class='flex'>";
if(isset($_POST['cat'])){
  $var_value = $_POST['varname'];
  echo $var_value;

$query="SELECT * From books ";
$sql = mysqli_query($conn, $query);
$count = 0;
echo '<div class="cls">';
$rows= mysqli_num_rows($sql);
if($rows){
while($row = mysqli_fetch_array($sql)){
    $bookid = $row['bookID'];
    $cat2 =$row['category'];
    //echo $cat2;
    $bknm =$row['bookname'];
    $initial =substr($bknm,0,1);
    $query1="SELECT * From register WHERE bkID = $bookid ORDER BY transactionid DESC Limit 1";
if($query1){
$sql1 = mysqli_query($conn, $query1);

$rows1= mysqli_num_rows($sql1);
if($rows1){
while($row1 = mysqli_fetch_array($sql1)){
   
   if($row1['status']=='Issued' || $row1['status']=='Pending'  )
   {$st = 'Unavailable';}
   
   else
   {$st = 'Available';}

   
}}

    if($count == 0){
        
        echo "<div class='cards'>
        
        
        <h1>$initial</h1>
        <div class='container'>
        
          <h4><b>$bknm </b></h4> 
          <p>$st</p> 
        </div>
        <button class='cw'>Pre-Book</button>

      </div>";}
      else{
        $count = '0';
        echo "<div class='cards'>
        <h1>$initial</h1>
        <div class='container'>
          <h4><b>$bknm </b></h4> 
          <p>$st</p> 
          
        </div>
        <button class='cw'>Pre-Book</button>
      </div>";}
      
               
}$count++;
}
}echo "</div>";
}
else{
$query="SELECT * From books";
$sql = mysqli_query($conn, $query);

$count = 0;
echo '<div class="cls">';
$rows= mysqli_num_rows($sql);
if($rows){
while($row = mysqli_fetch_array($sql)){
    $bookid = $row['bookID'];
    $cat2 =$row['category'];
    $bknm =$row['bookname'];
    $initial =substr($bknm,0,1);
    $query1="SELECT * From register WHERE bkID = $bookid ORDER BY transactionid DESC Limit 1";
if($query1){
$sql1 = mysqli_query($conn, $query1);

$rows1= mysqli_num_rows($sql1);
if($rows1){
while($row1 = mysqli_fetch_array($sql1)){
    //echo $row1['status'];
   
    if($row1['status']=='Issued' || $row1['status']=='Pending'  )
   $st = 'Unavailable';
   else if( $row1['status']!='Pending' || $row1['status']!='Issued')
   $st = 'Available';
   else
   $st = 'Available';

   
}}

    if($count == 0){
        
        echo "<div class='cards'>
        
        
        <h1>$initial</h1>
        <div class='container'>
        
          <h4><b>$bknm </b></h4> 
          <p>$st</p> 
        </div>
        <button class='cw'>Book</button>

      </div>";}
      else{
        $count = '0';
        echo "<div class='cards'>
        <h1>$initial</h1>
        <div class='container'>
          <h4><b>$bknm </b></h4> 
          <p>$st</p> 
          
        </div>
        <button class='cw'>Book</button>
      </div>";}
      
               
}$count++;
}
}echo "</div>";
}
/*
 $first = array( "Technology(General)", "Engineering(Genaral). Civil Engineering", "Hydraulic Engineering. Ocean engineering", "Environmental Technology", "Highway engineering. Roads and pavements", "Railroad engineering and operation", "Bridge engineering", "Building Construction", "Meachanical engineering and machinery", "Electrical Engineering. Electronics. Nuclear engineering", "Motor vehicles. Aeronautics. Astronautics", "Mining engineering. Metallurgy", "Chemical technology", "Photography", "Manufactures", "Handicrafts. Arts and crafts", "Home Economics" );

 echo "<div class='flex0'><h3>Category</h3>";
 echo "<div class='flex1'>"; 

 foreach( $first as $value ) { 
    echo "
    <form action='us-home.php' method='POST'>
    <input type='hidden' name='varname' value=' $value '>
    <button name='cat' class='cat_btn'> $value </button>
    </form>";
   
}  echo "</div>"; 
echo "</div>";
echo "</div>";
*/

 ?>
 <title>Home</title>

 