<?php

$server = "MySQL-5.7";
$username = "root";
$password = "";
$dbname = "registerUser";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("connection falled". mysqli_connect_error());
} 
?>