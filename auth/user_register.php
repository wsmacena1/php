<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$msg = null;

$mysqli = new mysqli("localhost","root","","aulaphp");

if($mysqli->connect_errno){
    die("Connection failed: " . $mysqli->connect_errno);
}

$mysqli->query("SELECT * FROM USERS WHERE EMAIL = '$email'");

if ($mysqli->affected_rows > 0){
    $msg = "E-mail already exists!";
}else{
    $sql = "INSERT INTO USERS ( NAME, EMAIL, PASSWORD, CREATED_AT) VALUES ('$name','$email','$password',NOW())";

    if($mysqli->query($sql)=== TRUE){
        $msg = "Register successful!";
    }else{
        $msg = "Error " . $sql . "<br>" ;
    }
}
    
$mysqli->close();

header("Location: register.php?msg=$msg");
// include("register.html");