<?php include 'ad-header.php';

    ?>
<header class="head">
    <h2>Book Management</h2>
    <div class="below">
    <a href="ad-home.php">
    <button class="sub1">Add</button></a>
    <form action="ad-bk-manage.php" method="POST">
    <input type="number" name="book_id" placeholder="Search by ID" style="margin-left: 245px;width:300px;margin-right:5px;">
    <button type="submit" name="go1" class="sub1">Go</button></a> 
    <input type="text" placeholder="Search by Book Name" name="book_name" style="margin-left: 30px;width:300px;margin-right:5px;">
    <button type="submit" name="go2" class="sub1">Go</button></a></form>
</div></header>

<div class="content1">
    <table>
        <thead>
            <th style="width:100px;padding-left:15px;
    padding-top:5px;">Book ID</th>
            <th style="width:450px;padding-left:165px;
    padding-top:5px;">Title</th>
            <th style="width:250px;padding-left:95px;
    padding-top:5px;">Status</th>
            <th colspan='2' style="width:200px;padding-left:95px;
    padding-top:5px;">Action</th>

<?php
session_start();
if(isset($_POST['go1'])){require_once 'dbh.inc.php';

    if(isset($_POST['book_id'])){
        $searchid = $_POST['book_id'];
        $searchid = preg_replace("#[^0-9a-z]#i","",$searchid);
    
        $query = mysqli_query($conn,"SELECT * FROM books WHERE bookid LIKE '%$searchid%'");
        $count = mysqli_num_rows($query);
    
        if($count == 0){
            echo "<tr><td style='width:100px'></td>";
                    echo "<td style='width:80px'></td>";
                    echo "<td style='width:100px'>No Results</td></tr>";
        }else{
            while($row=mysqli_fetch_array($query)){
                $id_search = $row['bookID'];
                echo "<table border='1'";
                //echo "<div>".$id_search."</div>";
                echo "<tr>";
                echo "<td style='width:100px'>".$id_search.'</td>';
                echo "<td style='width:450px'>".$row['bookname'].'</td>';
                echo "<td style='width:450px'>".$st.'</td>';
                echo "<td>
    <div class='action'>
    <form action='ad-bk-edit.php' method='POST'>
    <input type='hidden' name='edit_id' value=' $id_search '>
    <button type='submit' name='edit_btn' class='edit'>EDIT</button>
    </form>
    <form action='ad-bk-delete.php' method='POST'>
    <input type='hidden' name='deleteid' value=' $id_search '>
    <button type='submit' name='delete_btn' class='delete'>DELETE</button>
    </form></div></td></tr>";
                echo "</table>";
            }
        }
    }
    $conn->close();}
    
    else if(isset($_POST['go2'])){require_once 'dbh.inc.php';

            if(isset($_POST['book_name'])){
                $searchid = $_POST['book_name'];
                $searchid = preg_replace("#[^0-9a-z]#i","",$searchid);
            
                $query = mysqli_query($conn,"SELECT * FROM books WHERE bookname LIKE '%$searchid%'");
                $count = mysqli_num_rows($query);
            
                if($count == 0){
                    echo "<tr><td style='width:100px'></td>";
                    echo "<td style='width:80px'></td>";
                    echo "<td style='width:100px'>No Results</td></tr>";
                }else{
                    while($row=mysqli_fetch_array($query)){
                        $name_search = $row['bookname'];
                        $id_search = $row['bookID'];
                        echo "<table border='1'";
                        //echo "<div>".$id_search."</div>";
                        echo "<tr>";
                        echo "<td style='width:100px'>".$row['bookID'].'</td>';
                        echo "<td style='width:450px'>".$name_search.'</td>';
                        echo "<td style='width:450px'>".$st.'</td>';
                        echo "<td>
            <div class='action'>
            <form action='ad-bk-edit.php' method='POST'>
            <input type='hidden' name='edit_id' value=' $id_search '>
            <button type='submit' name='edit_btn' class='edit'>EDIT</button>
            </form>
            <form action='ad-bk-delete.php' method='POST'>
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



$query="SELECT * From books";
$sql = mysqli_query($conn, $query);

$count = 0;
echo "<table border='1'";
$rows= mysqli_num_rows($sql);
if($rows){
while($row = mysqli_fetch_array($sql)){
    $bookid = $row['bookID'];
    
    $query1="SELECT * From register WHERE bkID = $bookid ORDER BY transactionid DESC Limit 1";
if($query1){
$sql1 = mysqli_query($conn, $query1);

$rows1= mysqli_num_rows($sql1);
if($rows1){
while($row1 = mysqli_fetch_array($sql1)){
   //echo $bookid;
   //echo $row1['status'];
   if($row1['status']=='Returned'  )
   $st = 'Available';
   else if( $row1['status']=='Pending' )
   $st = 'Unavailable';
   else if( $row1['status']=='Issued' )
   $st = 'Unavailable';
   else
   $st = 'Available';
   
}}


    if($count == 0){
        echo "<tr>";
    echo "<td style='width:100px'>".$bookid.'</td>';
    echo "<td style='width:550px'>".$row['bookname'].'</td>';
    echo "<td style='width:250px'>".$st.'</td>';
    echo "<td>
    <div class='action'>
    <form action='ad-bk-edit.php' method='POST'>
    <input type='hidden' name='edit_id' value=' $bookid '>
    <button type='submit' name='edit_btn' class='edit'>EDIT</button>
    </form>
    <form action='ad-bk-delete.php' method='POST'>
    <input type='hidden' name='deleteid' value=' $bookid '>
    <button type='submit' name='delete_btn' class='delete'>DELETE</button>
    </form></div></td></tr>";

}
    else{
    $count = '0';
    echo "<td style='width:100px'>".$row['bookID'].'</td>';
    echo "<td style='width:550px'>".$row['bookname'].'</td>';
    echo "<td style='width:250px'>".$st.'</td>';
    echo "<td>
    <div class='action'>
    <form action='ad-bk-edit.php' method='POST'>
    <input type='hidden' name='edit_id' value=' $bookid '>
    <button type='submit' name='edit_btn' class='edit'>EDIT</button>
    </form>
    <form action='ad-bk-delete.php' method='POST'>
    <input type='hidden' name='deleteid' value=' $bookid '>
    <button type='submit' name='delete_btn' class='delete'>DELETE</button>
    </form></div></td></tr>";
}
$count++;
}
}}
echo "</table>";
$conn->close();}
?>
</thead>
    </table>
</div>



