<?php
require_once 'config.php';

// learner
if((isset($_SESSION['user'])) && $user['is_staff'] == 0 ){ 
  header("location:dashboard.php");
} else {

// Instructor
if (isset($_SESSION['user']) && $user['is_staff'] == 1 ){
  header("location:control.php");
 }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <title>Login Page</title>
</head>
<body>
<div class="navbar_container">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">DSLS</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>  

<div class="container">
  <div class="img">
      <img src="./images/instructor.jpg" alt="instructor">
  </div>
  <div class="login-container">
    <?php
      require_once "log.php"; 
    ?>
  <div id="alert">
  <?php
  require_once "feedback.php";
  ?>
  </div>
  <form action="login.php" method="post">
        <div class="row">
            <div class="col-sm-3">
              <h1>Login</h1>
              <p>Are you an Existing User?</p>
                <hr class="nb-3">
                <label for="email"><i>Email Address</i></label>
                <input class="form-control" id="email" type="email" name="email" required>

                <label for="password"><i>Password</i></label>
                <input class="form-control" id="password" type="password" name="password" required>

              <p><input type="checkbox" > Remember me</p>

                <hr class="nb-3">

                <button class="btn btn-primary" type="submit" id="login" name="submit" style=text-align:center;>Sign up</button><br>
                        
                <a href="reg.php">Create account</a>
                <a href="">Forgot Password?</a>
                       
            </div>
        </div>
    </form>
    </div>
  </div> 
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>