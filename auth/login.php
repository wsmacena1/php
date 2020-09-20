<?php
$email = $_POST['email'];
$password = $_POST['password'];

$mysqli = new mysqli("localhost","root","","aulaphp");

$mysqli->query("SELECT * FROM USERS WHERE EMAIL = '$email'");
