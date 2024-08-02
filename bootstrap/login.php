<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>login</title>

    <style>
        form{
            background-image:linear-gradient(to bottom right, orange, skyblue);
            padding:40px;
            box-shadow: 0px 0px 15px 4px;
            border-radius:15px;
            opacity:.9;
        }
        body{
           background:pink;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5 p-3">
            <div class="col-lg-4 col-md-6 col-sm-12">
            
<h1 class="text-center text-primary"><i class="bi bi-heart-pulse">MediCare</h1></i>
<br>

<form action="submit.php" method="get">
<h3 class = "text-center text-dark">Sign in</h3>
  <div class="form-group row">
    <div class="col-mx-10 p-3">
      <input type="textfield" name="username" class="form-control" id="inputEmail3" placeholder="Username">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-mx-10 p-3">
      <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  
  
  <div class="form-group row">
    <div class="col-mx-10 p-3 ">
      <input type="submit" class="btn btn-primary col-12"></input>
       No Account?<a href="register.php">Create account here</a>
    </div>
  </div>
              
</form>
            </div>
        </div>
    </div>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>