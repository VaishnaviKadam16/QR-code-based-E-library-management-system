<?php
include_once 'us-header.php';

/*$file = 'qrcodes/1016Aeronautics.png';
if (file_exists($file)) {
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename='.basename($file));
  header('Content-Transfer-Encoding: binary');
  header('Expires: 0');
  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
  header('Pragma: public');
  header('Content-Length: ' . filesize($file));
  ob_clean();
  flush();
  readfile($file);
  exit;
}*/?>

<link rel="stylesheet" type="text/css" href="us-style.php">
<script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
 
      <title>Scan QR Code</title>
<div class="qrc">
<form  action="us-scan.inc.php" method="POST" enctype="multipart/form-data">
  <div class="qr-container">  
      <h2>Issue Book</h2>
      <input type="file" name="qrimage" accept="image/*" style="width:300px;font-size:16px;height:80px;border-radius:7px;margin-top:40px;margin-left:60px;" required>
      <input type="submit" value="Scan Code" style="width:200px;background-color:#BA0600;color:white;font-size:20px;height:50px;margin-left:80px;margin-top:30px;border-radius:7px;">  
      <div id="container">
      <h1>QR Code Scanner</h1>

      <a id="btn-scan-qr">
        <img src="https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/07/1499401426qr_icon.svg">
      </a>

      <canvas hidden="" id="qr-canvas"></canvas>

      <div id="qr-result" hidden="">
        <b>Data:</b> <span id="outputData"></span>
      </div>
    </div>

    <script src="us-qrCodeScanner.js"></script>
  
      
  </div>
</form>

<div class="qr-container">  
      <h2>Return Book</h2>
      
      
  </div>
  </div>

