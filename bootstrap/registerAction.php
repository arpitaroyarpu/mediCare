<?php
include 'config.php';

//echo "<pre>";
//print_r ($_GET);
//echo "</pre>";
//echo $_REQUEST['r_username']."<br>";
//echo $_REQUEST['r_email']."<br>";
//echo $_REQUEST['r_pass']."<br>";
//echo $_REQUEST['r_con_pass'];

$r_username = $_POST['r_username'];
$r_email = $_POST['r_email'];
$r_phone = $_POST['r_phone'];
$r_pass = $_POST['r_pass'];
$r_con_pass = $_POST['r_con_pass'];

//$serverName="localhost";
//$userName="root";
//$password="";
//$dbName="php";

//$mysqli_connect($serverName,$userName,$password,$dbName);

$username_pattern = "/^[A-Za-z .]{3,20}$/"; //UserName Regex
$phone_pattern = "/(\+88)?-?01[3-9]\d{8}/";
$email_pattern = "/((cse|eee|thm|civil|bba|ih|english)_\d{10}@lus\.ac\.bd)/";
$pass_pattern = "/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/";



//$duplicateUsernameQuery="SELECT * FROM `register` WHERE db_username='$r_username'";

//$duplicate_username = mysqli_query($conn,$duplicateUsernameQuery);
//duplicate username e kono row ase naki check korbe/select kore anbe

//if(!mysqli_num_rows($duplicate_username)>0){
   // echo "<script> alert('Username already taken!!') </script>";
   // echo "<script> location.href = 'register.php' </script>";
//}


 if(!preg_match($username_pattern,$r_username)){
    echo "<script> alert('only char(3-20)') </script>";
    echo "<script> location.href = 'register.php' </script>";
}

else if(!preg_match($email_pattern,$r_email)){
    echo "<script> alert('wrong email!!') </script>";
    echo "<script> location.href = 'register.php' </script>";
}

else if(!preg_match($phone_pattern,$r_phone)){
    echo "<script> alert('wrong phone number!!') </script>";
    echo "<script> location.href = 'register.php' </script>";
}

else if(!preg_match($pass_pattern,$r_pass)){
    echo "<script> alert('wrong password!!') </script>";
    echo "<script> location.href = 'register.php' </script>";
}

else if($r_pass!==$r_con_pass){
   // echo "<script> alert('not matched!!') </script>";
    echo "<script> location.href = 'login.php' </script>";
}

else{
    $insertQuery = "INSERT INTO `register`(`db_username`, `db_email`, `db_phone`, `db_pass`) VALUES ('$r_username','$r_email','$r_phone','$r_pass')";
    if(!mysqli_query($conn,$insertQuery)){
        echo "<script> alert('not registered!!') </script>";
        echo "<script> location.href = 'register.php' </script>";
    }else{

        echo "<script> alert('Successfully registered!!') </scrtipt>";
        echo "<script> location.href = 'login.php' </script>";
    }
}

 