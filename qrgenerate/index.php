<?php
echo "qrcode";

include('phpqrcode/qrlib.php');
    

    // how to save PNG codes to server
    
    $tempDir = "qrcodes/";
    $url =urlencode("https://www.google.com/");
    $codeContents = 'hrllmbmnbboopm';
    
    // we need to generate filename somehow, 
    // with md5 or with database ID used to obtains $codeContents...
    //$fileName = '005_file_'.md5($codeContents).'.png';
    $fileName = 'mheeennmllblloho';
    $pngAbsoluteFilePath = $tempDir.$fileName;
    $urlRelativeFilePath =$tempDir.$fileName;
    
    // generating
    if (!file_exists($pngAbsoluteFilePath)) {
        QRcode::png($codeContents, $pngAbsoluteFilePath,$urlRelativeFilePath);
        
        echo 'File generated!';
        echo '<hr />';
        echo 'Server PNG File: '.$pngAbsoluteFilePath;
        echo '<img src="'.$urlRelativeFilePath.'" />';
        include 'sth.html';
    } else {
        echo 'File already generated! We can use this cached file to speed up site on common codes!';
        echo '<hr />';
    }
    
    //echo 'Server PNG File: '.$pngAbsoluteFilePath;
    echo '<hr />';
    
    // displaying
    //echo '<img src="'.$urlRelativeFilePath.'" />';
?>
