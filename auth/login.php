<?php
$email = $_POST['email'];
$password = $_POST['password'];

$mysqli = new mysqli("localhost","root","","aulaphp");

$mysqli->query("select id from users where email = '$email'");

if($mysqli->affected_rows > 0){
    $mysqli->query("select id from users where email= '$email' and password = '$password'");
    if($mysqli->affected_rows > 0){
        $msg = "Login successful.";
    }
}else{
    $msg = "The e-mail or password is incorrect.";
}

$mysqli->close();

header("Location: home.php?msg=$msg");