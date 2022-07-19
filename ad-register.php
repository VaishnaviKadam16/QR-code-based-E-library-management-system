<?php include 'ad-header.php';

    ?>

<div class="content">
    <h2>Register</h2>
    <table>
        <thead>
            <th style="width:250px;padding-left:15px;
    padding-top:5px;">User Name</th>
            <th style="width:50px;padding-left:165px;
    padding-top:5px;">Status</th>
            <th style="width:350px;padding-left:95px;
    padding-top:5px;">Book Name</th>
            <th colspan='2' style="width:200px;padding-left:75px;
    padding-top:5px;">Action</th>

<?php

require_once 'dbh.inc.php';
$query="SELECT * From register ORDER BY transactionid Desc";
$sql = mysqli_query($conn, $query);

$count = 0;
echo "<table border='1'";
$rows= mysqli_num_rows($sql);
if($rows){
while($row = mysqli_fetch_array($sql)){
    $bookid = $row['transactionID'];
    //echo $bookid;
    if($row['usNM']!='Admin'){
    if($count == 0){
        echo "<tr>";
    echo "<td style='width:450px'>".$row['usNM'].'</td>';
    echo "<td style='width:100px'>".$row['status'].'</td>';
    echo  "<td style='width:450px'>".$row['bkNM'].'</td>';
    echo "<td>
    <div class='action'>
    <form action='ad-detail.php' method='POST'>
    <input type='hidden' name='detail1' value=' $bookid '>
    <button type='submit' name='detail2' class='edit'>DETAILS</button>
    </form>
    </div></td></tr>";

}
    else{
    $count = '0';
    echo "<td style='width:450px'>".$row['usNM'].'</td>';
    echo "<td style='width:100px'>".$row['status'].'</td>';
    echo "<td style='width:450px'>".$row['bkNM'].'</td>';
    echo "<td>
    <div class='action'>
    <form action='ad-detail.php' method='POST'>
    <input type='hidden' name='detail1' value=' $bookid '>
    <button type='submit' name='detail2' class='edit'>DETAILS</button>
    </form>
    </div></td></tr>";
}
$count++;
$c+=$count++;

}
}//echo $c;
echo "</table>";}
$conn->close();
?>
</thead>
    </table>
</div>
