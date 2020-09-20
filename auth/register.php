<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$mysqli = new mysqli("localhost","root","","aulaphp");

if($mysqli->connect_errno){
    die("Connection failed: " . $mysqli->connect_errno);
}

$mysqli->query("SELECT * FROM USERS WHERE EMAIL = '$email'");

if ($mysqli->affected_rows > 0){
    echo "E-mail already exists!";
}else{
    $sql = "INSERT INTO USERS ( NAME, EMAIL, PASSWORD, CREATED_AT) VALUES ('$name','$email','$password',NOW())";

    if($mysqli->query($sql)=== TRUE){
        echo "Register successful!";
    }else{
        echo "Error " . $sql . "<br>" ;
    }
}
    
$mysqli->close();

include("register.html");