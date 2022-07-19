<?php

if(isset($_POST["submit"])){
    $name =$_POST["name"];
    $branch =$_POST["branch"];
    $year =$_POST["year"];
    $rollno =$_POST["rollno"];
    $phone =$_POST["phone"];
    $email =$_POST["email"];
    $password =$_POST["psw"];
    $pswrepeat =$_POST["pswrepeat"];

    require_once 'dbh.inc.php';
    require_once 'us-functions.inc.php';

    if(emptyInputSignup($name, $branch, $year, $rollno, $phone, $email, $password, $pswrepeat ) !== false){
        header("location: index.php?error=emptyinput");
        exit();  
    }
    if(invalidUid($name ) !== false){
        header("location: index.php?error=invaliduid");
        exit();  
    }
    if(invalidEmail($email ) !== false){
        header("location: index.php?error=invalidemail");
        exit();  
    }
    if(invalidPhone($phone ) !== false){
        header("location: index.php?error=invalidphone");
        exit();  
    }
    if(pwdMatch( $password, $pswrepeat ) !== false){
        header("location: index.php?error=passworddontmatch");
        exit();  
    }
    if(uidExists($conn, $email ) !== false){
        header("location: index.php?error=emailtaken");
        exit();  
    }

    createUser($conn, $name, $branch, $year, $rollno, $phone,  $email,$password);
}
else{
    header("location: index.php");
}