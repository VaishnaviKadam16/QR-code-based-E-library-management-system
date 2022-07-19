<?php
include_once 'us-header.php';

session_start();


require_once 'dbh.inc.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
  $id =$_POST['bookid'];

//echo "id= ".$id;

$query = "SELECT * FROM books WHERE bookID =$id ";
if($query){
    $sql = mysqli_query($conn, $query);
    
    $rows= mysqli_num_rows($sql);
    if($rows){
    while($row = mysqli_fetch_array($sql)){
        $bookname = $row['bookname'];
        $author =$row['author'];
        $edition =$row['edition'];}
    $isdate = date('Y/m/d');}}

    }


/*while($get = mysqli_fetch_array($query)){
    $bookname = $get['bookname'];
    $author =$get['author'];
    $edition =$get['edition'];}
$isdate = date('Y/m/d');}*/
?>

<link rel="stylesheet" type="text/css" href="us-style.php">

    <title>QRscan</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>



<body>
    <style>
        #preview {
            width: 250px;
            height: 250px;
            margin-left: 10px ;
        }
        #vid{
            display:column;
            margin-left:20px;
        }
    </style>
   <div class="qrc">
      <form  action="us-scan.inc.php" method="POST" >
      <div class="qr-container">
      <h2>Issue Book</h2>
      <div class="date">
      <label>BookID</label>
      <input type="text" name="bookid" value=<?php echo $id ?> ></div>
      <div class="date">
      <label>Book Name</label>
      <input type="text" name="bookname" value='<?php echo $bookname ?>'></div>
      <div class="date">
      <label>Author</label>
      <input type="text" name="author" value=<?php echo $author ?> ></div>
      <div class="date">
      <label>Edition</label>
      <input type="text" name="edition" value= <?php echo $edition ?> ></div>
      <div class="date">
      <label>Issue Date</label>
      <input type="date" name="issuedate" value=<?php echo $isdate ?>  ></div>
      <div class="date">
      <label>Return Date</label>
      <input type="date" name="setdate" required ></div>
      <button type="submit" name="qr-submit" class="qr">Issue</button>  
      </div>
  
      </form>
      <div class="qr-container1">
      <h2>Scan QR Code</h2>
      <div class="vid">
    <video id="preview"></video>
   
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script type="text/javascript">
        var scanner = new Instascan.Scanner({
            video: document.getElementById('preview'),
            scanPeriod: 5,
            mirror: false
        });
        
        scanner.addListener('scan', function(content) {
            //alert(content);
            var c = content;
            document.getElementById("data").value = c;
            document.getElementById("data1").value = "Scanned";
            scanner.stop(cameras[0]);
            //alert(c);
            //window.open(c,"_blank");
               //window.location.href=content;
        });
        
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                //scanner.start(cameras[0]);
                scanner.stop(cameras[0]);
                $('[name="options"]').on('change', function() {
                    if ($(this).val() == 1) {
                        if (cameras[0] != "") {
                            scanner.start(cameras[0]);
                            
                        } else {
                            alert('No Front camera found!');
                        }
                    } else if ($(this).val() == 2) {
                        if (cameras[0] != "") {
                            scanner.stop(cameras[0]);
                        } else {
                            alert('No Back camera found!');
                        }
                    }
                });

            } else {
                console.error('No cameras found.');
                alert('No cameras found.');
            }
            
        }).catch(function(e) {
            console.error(e);
            alert(e);
        });
          
    </script>
    <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons" style="margin-left:4px;border:white;font-size:20px;color:#2A265F;">
   
        <label class="btn btn-primary active">
    <input type="radio" name="options" value="1" autocomplete="off" > Scan QR Code
  </label>
        <label class="btn btn-secondary" >
    <input type="radio" name="options" value="2" autocomplete="off" > Stop Scanning
  </label>
  
    </div>
   <form action="" method="POST"><div>
    <input type="hidden" name="bookid" id="data" value="" >
    <div class="date">
    <label style="border:white;font-size:20px;color:#2A265F;">Message: </label>
    <input type="text" name="ans" id="data1" style="border:white;font-size:25px;color:#BA0600;" value="" ></div></div>
    
    <button type="submit" name="submit" class="cw">OK</button> 
    </form>
    </div>
    </div>
</body>

</html>

