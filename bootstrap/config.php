<?php

$serverName="localhost";
$userName="root";
$password="";
$dbName="php";

$conn = mysqli_connect($serverName,$userName,$password,$dbName);

if(!$conn){
    die("connection failed!".mysqli_connect_error()); 

}

else{
     echo "<script>alert('Database connected!!')</script>";
}