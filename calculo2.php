<?php

$first = $_POST['fname'];
$last = $_POST['lname'];

$mysqli = new mysqli("localhost","root","","aulaphp");

if($mysqli->connect_errno){
    echo "Failed to connect to MySql(" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}else{

    $mysqli->query("SELECT * FROM CONTACT"); 
    echo $mysqli->affected_rows;

    echo $mysqli->host_info . "\n olá rs";
}