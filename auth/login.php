<?php

$email = $_POST['email'];
$password = $_POST['password'];
$msg = null;

$mysqli = new mysqli("localhost","root","","aulaphp");

if($mysqli->connect_errno){
    die("Connection failed: " . $mysqli->connect_errno);
}

$mysqli->query("select id from users where email = '$email'");

if($mysqli->affected_rows > 0){
    $email = addslashes($email);
    $password = addslashes($password);
    $mysqli->query("select id from users where email= '$email' and password = '$password'");
    if($mysqli->affected_rows > 0){
        $msg = "Login successful.";
        header("Location: /php/home.php?msg=$msg");
    }else{
        $msg = "Incorrect password!";
        header("Location: /php/index.php?msg=$msg");
    }
}else{
    $msg = "E-mail is not registered!";
    header("Location: /php/index.php?msg=$msg");
    
}
echo "aabbcc";
$mysqli->close();