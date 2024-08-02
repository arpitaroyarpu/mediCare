<?php

session_start();
if(isset($_SESSION['username'])){
session_start();
session_destroy();
echo "<script> location.href = 'login.php' </script>";
}

else{
    echo "<script> alert('do not access from url!!login first') </script>";
    echo "<script> location.href = login.php' </script>";
}