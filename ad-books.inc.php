<?php
include_once 'ad-home.php';
if(isset($_POST["submit"])){
    $bookname =$_POST["bookname"];
    $author =$_POST["author"];
    $publisher =$_POST["publisher"];
    $edition =$_POST["edition"];
    $isbn =$_POST["isbn"];
    $description =$_POST["description"];
    $category =$_POST["category"];

    require_once 'dbh.inc.php';

    $usid ='0';
        $usNM = 'Admin';
        $st='Available';
        $date=date('Y/m/d');
        $INSERT1 = "INSERT Into register (bkNM,usID,usNM,status,date) values(?,?,?,?,?)";

        

        $stmt1= $conn->prepare($INSERT1);
        $stmt1->bind_param("sisss",$bookname, $usid,$usNM, $st,$date);
        $stmt1->execute();
        

    $INSERT = "INSERT Into books (bookname,author,publisher,edition,isbn,description,category ) values(?,?,?,?,?,?,?)";

        

        $stmt= $conn->prepare($INSERT);
        $stmt->bind_param("sssssss",$bookname, $author,$publisher, $edition,$isbn,$description,  $category);
        $stmt->execute();


        
        
         }
         $id=mysqli_insert_id($conn);
         $stmt->close();
         $stmt1->close();
         $conn->close();



include('phpqrcode/qrlib.php');

$tempDir = "qrcodes/";

$codeContents = $id ;



$fileName =''.$id .$bookname.'.png';
    $pngAbsoluteFilePath = $tempDir.$fileName;
    $urlRelativeFilePath =$tempDir.$fileName;

    if (!file_exists($pngAbsoluteFilePath)) {
        QRcode::png($codeContents, $pngAbsoluteFilePath,$urlRelativeFilePath);
        
        echo 'File generated!';
        echo '<hr />';
        echo ''.$fileName;
        echo '<hr />';
        
        echo '<img src="'.$urlRelativeFilePath.'" />';
        echo '<hr />';
        echo 'Server PNG File: '.$pngAbsoluteFilePath;
        echo '<hr />';
    } else {
        echo 'File already generated! We can use this cached file to speed up site on common codes!';
        echo '<hr />';
    }
    ?>
    
    
    <!--<form action="upload.php" method="post" enctype="multipart/form-data">
    
    <input type="file" name="file" src="<?php //echo $urlRelativeFilePath ?>">
    <button type="submit" name="submit" value="Upload"></button>
</form>-->
</div>
    </div>