<?php

function emptyInputSignup($name, $branch, $year, $rollno, $phone, $email, $password, $pswrepeat ){
    $result;
    if(empty($name) || empty($branch) || empty($year) || empty($rollno) || empty($phone) || empty($email) || empty($password) || empty($pswrepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($name ){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email ){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidPhone($phone ){
    $result;
    if(strlen($phone)!==10){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch( $password, $pswrepeat ){
    $result;
    if($password !== $pswrepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $email ){
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: index.php?error=emailtaken");
        exit();
    }
    
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row= mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    
}

function createUser($conn, $name, $branch, $year, $rollno, $phone,  $email,$password){
    $sql = "INSERT INTO users (name ,branch, year, rollno,  phone,email, password) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: index.php?error=emailtaken");
        exit();
    }
        
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sssssss",$name, $branch, $year, $rollno, $phone,  $email, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location: index.php?error=none");
        exit();       
    
}

function emptyInputLogin($email, $password){
    $result;
    if (empty($email) || empty($password) ){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $password){
    $uidExists = uidExists($conn, $email );

    if($uidExists === false){
    header("location: index.php?error=wronglogin");
    exit();
    }

    $pwdHashed = $uidExists["password"];
    $checkPwd = password_verify($password, $pwdHashed);

    if($checkPwd === false){
        header("location: index.php?error=wrongpwd");
        exit();  
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["usid"]=$uidExists["userID"];
        $_SESSION["usemail"]=$uidExists["email"];
        header("location: us-home.php");
        exit(); 
    }
}