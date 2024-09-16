<?php
$student_id= filter_input(INPUT_POST, "student_id", FILTER_VALIDATE_INT);
$name =$_POST["name"];
$address =$_POST["address"];
$diploma_id =filter_input(INPUT_POST, "diploma_id", FILTER_VALIDATE_INT);


$host = "localhost";
$dbname ="test1";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO test1 ( student_id, name, address, diploma_id )
VALUES(?, ?, ?, ?)";

$stmt =mysqli_stmt_init($conn);

if(! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "issi" ,
$student_id, $name, $address, $diploma_id);

mysqli_stmt_execute($stmt);



echo "Record saved.";
