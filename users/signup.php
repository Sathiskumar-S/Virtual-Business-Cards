<?php include "../libs/load.class.php"?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signup - Virtual Business Cards</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signup.css?<?php echo time();?>">
    <link rel="shortcut icon" href="../images/appicon.jpg" type="image/x-icon">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body class="text-center">
    <main class="form-signin">
      <?php
        if(isset($_POST['signup'])){
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $username = $_POST['username'];
          $email = $_POST['email'];
          $password = $_POST['password'];

          User::signup($firstname,$lastname,$username,$email,$password);

          ?>
          <div class="alert alert-success" role="alert">
            Your data stored successfully. <a href="login.php">login</a>
          </div>
        <?php } ?>
      <form action="" method="post">
        <img class="mb-4" src="../images/appicon.jpg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Virtual Business Cards</h1>

        <div class="form-floating">
          <input type="text" class="form-control firstname" id="floatingInput" placeholder="firstname" name="firstname">
          <label for="floatingInput">First Name</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" placeholder="lastname" name="lastname">
          <label for="floatingInput">Last Name</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" placeholder="username" name="username">
          <label for="floatingInput">User Name</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
          <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="signup">Sign up</button>
      </form><br>
      <p>Already have login and password?<a href="login.php"> sign in</a></p>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  </body>
</html>
