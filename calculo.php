<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];

if(!empty($fname) || !empty($lname)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "devmedia";

    //$conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);
    $conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbName);

    if (mysqli_connect_error()) {
        die('Connect error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }else{
        $sql = 'INSERT INTO CONTACTS (fname, lname, created_at) VALUES (?, ?, NOW())';

        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "ss", $param_fname, $param_lname);
        }
        $param_fname = $fname;
        $param_lname = $lname;
        if (mysqli_stmt_execute($stmt)){
        
                echo "Created Successfully";
                header("location: index.php");
                exit();
            
        }else{
            echo "Something went wrong. Please try again later.";
        }   
        mysqli_stmt_close($stmt);

    }
    mysqli_close($conn);
}else{
    echo "All files are required!";
    die();
}


?>