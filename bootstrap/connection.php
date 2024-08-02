<?php

$con = mysqli_connect("localhost", "root", "", "crud");

if(mysqli_connect_errno()){
    die("Cannot connect to database" .mysqli_connect_errno());
}

define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/mediCare/bootstrap/uploads/");

define("FETCH_SRC", "http://127.0.0.1/mediCare/bootstrap/uploads/")
?>