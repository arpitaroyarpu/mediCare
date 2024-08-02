
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Lobster+Two:ital,wght@0,700;1,400&family=Romanesco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
</head>
<body>

</a>
<header class="header">
        <a href="#" class="logo">
            <img src="img/logo.png">


<nav class="headbar">
    
    
    <a href="about.php">About</a>
    <a href="service.php">Products</a>
    <a href="medstore.php">MedStore</a>
    <a href="contact.php">Contact</a> 
    

</nav>


<?php
session_start();

if(isset($_SESSION['username'])){
    echo "<h1> Welcome,". $_SESSION['username']. " !</h1><br>";
    echo "<br><a href = 'logout.php'><h2>Sign Out here</h2></a>";
}
?>

    
</div>
</header>

<section class="main">

<div class="left">

    <h2>We Are Here For Your Care</h2>
    <h1>We Promise To Provide Best</h1>
    <p>We are here for your care 24/7.Any help just contact us</p>
    
<br>
    <button class="text-white"><a href="review.php">Get In Touch</a></button>
   
</div>

<div class="right">
    <img src = "img/bgm.jpg">

   
</div>
</section>
</body>
</html>