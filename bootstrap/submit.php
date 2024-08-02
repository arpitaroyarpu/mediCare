<?php

//echo "<pre>";
//print_r ($_GET);
//echo "</pre>";
//echo $_REQUEST['username']."<br>";
//echo $_REQUEST['pass'];

session_start();
$username = "arpita";
$pass = "t1234";

$input_username = $_REQUEST['username'];
$input_pass = $_REQUEST['pass'];

if($input_username == $username && $input_pass == $pass)
{
    $_SESSION['username'] = $username;
    echo "<script> location.href = 'index.php' </script>";
}
else{
    echo "<script> alert('username & password is not matching') </script>";
    echo "<script> location.href = 'login.php' </script>";
}


