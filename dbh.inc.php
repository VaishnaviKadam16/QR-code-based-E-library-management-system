<?php

$servername ="localhost:3307";
$dbusername ="root";
$dbpassword ="";
$dbname ="library3";

$conn = mysqli_connect($servername ,$dbusername ,$dbpassword ,$dbname ,);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}