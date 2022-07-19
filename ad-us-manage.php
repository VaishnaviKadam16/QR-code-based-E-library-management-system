<?php include 'ad-header.php';



    ?>
<header class="head">
    <h2>User Management</h2>
    <div class="below">
    
    <form action="ad-us-manage.php" method="POST">
    <input type="number" name="user_id" placeholder="Search by ID" style="margin-left: 245px;width:300px;margin-right:5px;">
    <button type="submit" name="go1" class="sub1">Go</button></a> 
    <input type="text" placeholder="Search by UserName" name="user_name" style="margin-left: 30px;width:300px;margin-right:5px;">
    <button type="submit" name="go2" class="sub1">Go</button></a></form>
</div></header>

<div class="content1">
    <table>
        <thead>
            <th style="width:100px;padding-left:15px;
    padding-top:5px;">User ID</th>
            <th style="width:550px;padding-left:165px;
    padding-top:5px;">User Name</th>
            <th style="width:100px;padding-left:95px;
    padding-top:5px;">Issued</th>
    <th style="width:100px;padding-left:65px;
    padding-top:5px;">Returned</th>
    <th style="width:100px;padding-left:55px;
    padding-top:5px;">Pending</th>
            <th colspan='2' style="width:200px;padding-left:135px;
    padding-top:5px;">Action</th>

<?php
session_start();
if(isset($_POST['go1'])){require_once 'dbh.inc.php';


    if(isset($_POST['user_id'])){
        $searchid = $_POST['user_id'];
        $searchid = preg_replace("#[^0-9a-z]#i","",$searchid);
    
        $query = mysqli_query($conn,"SELECT * FROM users WHERE userID LIKE '%$searchid%'");
        $count = mysqli_num_rows($query);
    

        $stc2=0; $stc=0; $stc1=0;$stc3=0;
$q="SELECT * From register WHERE usID LIKE '%$searchid%' ORDER BY transactionid DESC";
if($q){
$sq = mysqli_query($conn, $q);

$county = 0;

$rowz= mysqli_num_rows($sq);
//echo $rowz;
if($rowz){
while($roww = mysqli_fetch_array($sq)){
    
    $st = $roww['status'];
    
    if($st=="Returned" || $st=="Returned Late" || $st=="Pending" || $st=="Issued")
    {$stc++; 
        if($st=="Returned" )
        {$stc1++;}
        if($st=="Returned" || $st=="Returned Late" || $st=="Issued"){$stc3++;}
    } 
    $county++;

}
$stc2=$stc-$stc3;
}
}
        if($count == 0){
            echo "<tr><td style='width:100px'></td>";
                    echo "<td style='width:80px'></td>";
                    echo "<td style='width:100px'>No Results</td></tr>";
        }else{
            while($row=mysqli_fetch_array($query)){
                $id_search = $row['userID'];
                echo "<table border='1'";
                //echo "<div>".$id_search."</div>";
                echo "<tr>";
                echo "<td style='width:100px'>".$id_search.'</td>';
                echo "<td style='width:450px'>".$row['name'].'</td>';
                echo "<td style='width:150px'>".$stc.'</td>';
                echo "<td style='width:150px'>".$stc1.'</td>';
                echo "<td style='width:150px'>".$stc2.'</td>';

    echo "<td>
    <div class='action'>
    <form action='ad-us-edit.php' method='POST'>
    <input type='hidden' name='edit_id' value=' $id_search '>
    <button type='submit' name='edit_btn' class='edit'>EDIT</button>
    </form>
    <form action='ad-us-delete.php' method='POST'>
    <input type='hidden' name='deleteid' value=' $id_search '>
    <button type='submit' name='delete_btn' class='delete'>DELETE</button>
    </form></div></td></tr>";
                echo "</table>";
            }
        }
    }
    $conn->close();}
    
    else if(isset($_POST['go2'])){require_once 'dbh.inc.php';


        
    
    
    
            if(isset($_POST['user_name'])){
                $searchid = $_POST['user_name'];
                $searchid = preg_replace("#[^0-9a-z]#i","",$searchid);
            
                $query = mysqli_query($conn,"SELECT * FROM users WHERE name LIKE '%$searchid%'");
                $count = mysqli_num_rows($query);

                $stc=0; $stc1=0; $stc2=0;$stc3=0;
                //echo $searchid;
$q="SELECT * From register WHERE usNM LIKE '%$searchid%' ORDER BY transactionid DESC";
if($q){
$sq = mysqli_query($conn, $q);

$county = 0;

$rowz= mysqli_num_rows($sq);
if($rowz){
while($roww = mysqli_fetch_array($sq)){
    
    $st = $roww['status'];
    
    if($st=="Returned" || $st=="Returned Late" || $st=="Pending" || $st=="Issued")
    {$stc++; 
        if($st=="Returned" )
        {$stc1++;}
        if($st=="Returned" || $st=="Returned Late" || $st=="Issued"){$stc3++;}
    } 
    $county++;

}

}
}
            
                if($count == 0){
                    echo "<tr><td style='width:100px'></td>";
                    echo "<td style='width:80px'></td>";
                    echo "<td style='width:100px'>No Results</td></tr>";
                }else{
                    while($row=mysqli_fetch_array($query)){
                        $name_search = $row['name'];
                        $id_search =$row['userID'];
                        $stc2=$stc-$stc3;
                        echo "<table border='1'";
                        //echo "<div>".$id_search."</div>";
                        echo "<tr>";
                        echo "<td style='width:100px'>".$row['userID'].'</td>';
                        echo "<td style='width:450px'>".$name_search.'</td>';
                        echo "<td style='width:150px'>".$stc.'</td>';
                        echo "<td style='width:150px'>".$stc1.'</td>';
                        echo "<td style='width:150px'>".$stc2.'</td>';            echo "<td>
            <div class='action'>
            <form action='ad-us-edit.php' method='POST'>
            <input type='hidden' name='edit_id' value=' $id_search '>
            <button type='submit' name='edit_btn' class='edit'>EDIT</button>
            </form>
            <form action='ad-us-delete.php' method='POST'>
            <input type='hidden' name='deleteid' value=' $id_search '>
            <button type='submit' name='delete_btn' class='delete'>DELETE</button>
            </form></div></td></tr>";
                        echo "</table>";
                    }
                }
            }
            $conn->close();

    }
    else{
require_once 'dbh.inc.php';


$query="SELECT * From users";
$sql = mysqli_query($conn, $query);

$count = 0;
echo "<table border='1'";
$rows= mysqli_num_rows($sql);
if($rows){
while($row = mysqli_fetch_array($sql)){
    $bookid = $row['userID'];
    
    
    $stc2=0; $stc=0; $stc1=0;$stc3=0;
$q="SELECT * From register WHERE usID = $bookid ORDER BY transactionid DESC";
if($q){
$sq = mysqli_query($conn, $q);

$county = 0;

$rowz= mysqli_num_rows($sq);
if($rowz){
while($roww = mysqli_fetch_array($sq)){
    
    $st = $roww['status'];
    
    if($st=="Returned" || $st=="Returned Late" || $st=="Pending" || $st=="Issued")
    {$stc++; 
        if($st=="Returned" )
        {$stc1++;}
        if($st=="Returned" || $st=="Returned Late" || $st=="Issued"){$stc3++;}
    } 
    $county++;

}
$stc2=$stc-$stc3;
}
}


    if($count == 0){
        echo "<tr>";
    echo "<td style='width:100px'>".$bookid.'</td>';
    echo "<td style='width:450px'>".$row['name'].'</td>';
    echo "<td style='width:150px'>".$stc.'</td>';
    echo "<td style='width:150px'>".$stc1.'</td>';
    echo "<td style='width:150px'>".$stc2.'</td>';    echo "<td>
    <div class='action'>
    <form action='ad-us-edit.php' method='POST'>
    <input type='hidden' name='edit_id' value=' $bookid '>
    <button type='submit' name='edit_btn' class='edit'>EDIT</button>
    </form>
    <form action='ad-us-delete.php' method='POST'>
    <input type='hidden' name='deleteid' value=' $bookid '>
    <button type='submit' name='delete_btn' class='delete'>DELETE</button>
    </form></div></td></tr>";

}
    else{
    $count = '0';
    echo "<td style='width:100px'>".$row['userID'].'</td>';
    echo "<td style='width:450px'>".$row['name'].'</td>';
    echo "<td style='width:150px'>".$stc.'</td>';
    echo "<td style='width:150px'>".$stc1.'</td>';
    echo "<td style='width:150px'>".$stc2.'</td>';    echo "<td>
    <div class='action'>
    <form action='ad-us-edit.php' method='POST'>
    <input type='hidden' name='edit_id' value=' $bookid '>
    <button type='submit' name='edit_btn' class='edit'>EDIT</button>
    </form>
    <form action='ad-us-delete.php' method='POST'>
    <input type='hidden' name='deleteid' value=' $bookid '>
    <button type='submit' name='delete_btn' class='delete'>DELETE</button>
    </form></div></td></tr>";
}
$count++;
}
}
echo "</table>";
$conn->close();}
?>
</thead>
    </table>
</div>


