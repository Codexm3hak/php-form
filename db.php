<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "class_project";

$conn = mysqli_connect($server , $user , $password , $database );

if (!$conn){
    die("not connected to database:" . mysqli_connect_error());
}

?>