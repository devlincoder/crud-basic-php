<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "crud-php";
$conn = new mysqli($server,$user,$password,$database);

if($conn){
    echo "Database connected";
}else{
    die(mysqli_error($conn));
}