<?php
require_once 'config.php';

if(isset($_SESSION['user']) && $db_user['is_staff'] == 1) {
  header("location:control.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font images -->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Main Page</title>

    <script>
      $(function() {
          $('a[href*=\\#]:not([href=\\#])').on('click', function() {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
              if (target.length) {
                  $('html,body').animate({
                      scrollTop: target.offset().top
                  }, 1000);
                  return false;
              }
          });
      });
    </script>


  </head>
<body>
<!-- navigation -->
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
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#call">Contact Us</a>
        </li>
      </ul>
    </div>
        <div class="top">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="login.php">Login/Register</a>
          </li>
        </div>
  </div>
</nav>
</div>

<!-- container image -->
<div class="container-fluid pb-5 p-5" 
style ="background-image: url(https://lh3.googleusercontent.com/IyWliNU7K8eoF2eQZSW0Re1s18WAjPtfOYZBo-AsjXJN1PYZhArN4rfjI67wvhGn4eVj2FiZKUtwqZ7uDb_YgNvR8O9UryuMWkSmXQ=w1376-h550-p-nu-pa);
 background-size: cover; background-repeat: no repeat; ">
        <div class="masthead-subheading ">Welcome To Driving School Learning System!</div><br>
        <div class="masthead-heading text-uppercase">It's Nice To Have You</div><br>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger btn-more"  href="#services">Find Out More</a>
</div>
<br>

<!-- about section -->
<div class="about-section" id="about">
  <div class="text-center">
      <h2>About the DSLS</h2>
      <p>The DSL system will be used to process <br> the learning system online in driving <br> schools. It aims at enrolling learners <br> online
      and everything will be done via the system. <br> Learners and instructors will all have <br> their page an attendace register will be provided. <br>
      Training of learners will be conducted <br> in 3 weeks time to ensure that the <br> PDL has matured to be able to book <br> for the test at NTSA. 
      Driving will <br> be conducted by all kind of vehicles and <br> lessons on basic mechanical will be an <br> added advantage.    
    </p>
  </div>
  <div class="about-container">
    <div class="row">
      <div class="col-sm">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRt-YkG5DuyGAhJ0eDLCPbC5MBOs9m5cXX8yA&usqp=CAU" style="border-radius: 50%;" alt="Avatar">
      <p>All our clients details are secured privately in the system</p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm">
    <img src="https://www.kindpng.com/picc/m/10-109530_it-security-clip-art-blue-number-2-icon.png" alt="Avatar">
    <p>Every payment modules are properly encrypted from being exposed</p>
    </div>
  </div>
  </div>
</div>
<br>

<!-- caroussels -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://i1.wp.com/kenyayote.com/wp-content/uploads/2019/08/List-of-Driving-School-Test-Questions-and-Answer-for-passing-your-NTSA-exam.jpg?fit=1200%2C725&ssl=1" alt="driving" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/instructor.jpg" alt="driving">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/learners.jpg" alt="driving">
    </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<!-- services -->
<div class="container-section" id="services">
    <div class="text-center p-5">
        <h2>Services</h2><br>
        <p>Learn about the services we offer at DSLS</p>
    </div><br>
    <div class="row">
        <div class="col-sm">
    <span class="fa-3x">
    <i class="fas fa-comment"></i>
    </span>
        <p>Theory basics will be taught by highly qualified instructors on the road signs to be used and the model town board which represents the roads found in the towns!</p>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
      </div>
    <div class="col-sm">
    <span class="fa-3x">
    <i class="fas fa-comment"></i>
    </span>
      <p>In addition, basic mechanics will be taught to assist our learners have the knowledge of getting to fix some issues taht occur on while operation with a vehicle!</p>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
    </div>
    <div class="col-sm">
    <span class="fa-3x">
    <i class="fas fa-comment"></i>
    </span>
      <p>You will be introduced to a number of vehicles and get practical lessons on highways to gain the confidence while driving past other vehicles on the roads</p>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
    </div>
  </div>
</div>
<br>

<!-- container -->
<div class="container p-5"> 
  <div class="content">
      <h3>A Driving System <br> You Can Count On</h3>
      <p>Enrolling for driving schools is quite tiresome going through process of <br>visiting a driving school and
    having to fill your documents and having <br>to get into the NTSA system and apply for PDL and having to print.
     <br><b>Its quite tiresome right!</b> This system will simplify everything for you:</p>
     <ul>
       <li>The system provides a platform to book for driving lessons via the system!</li>
       <li>NTSA link is linked below with steps on how to open without challenges!</li>
       <li>The system will link you with the driving school of your choice!</li>
     </ul>
     <a href="login.php" class="btn btn-outline-primary">Enroll Me</a> 
  </div>
  <div class="content img" style="background-color: #322C2F">
      <img src="https://www.logodesign.net/logo-new/steering-wheel-and-open-book-for-driving-school-6737ld.png?size=1" alt="school">
  </div>
</div>
<br>


<!-- footer -->
<div class="footer p-5">
<div class="logo" id="call">
  <h4>DSLS Support</h4><br>
  <p><strong>CONTACT US</strong></p><br>
  <i class="fas fa-phone-alt"></i>
  <p>+254743411370</p>
  <i class="fas fa-envelope"></i>
  <p>githinjimugai@gmail.com</p>
</div>
<div class="resources">
  <h2>Features</h2>
  <ul>
    <li>About</li>
    <li>Learner Driver</li>
    <li>Contact Us</li>
  </ul>
</div>
<div class="links">
  <h3>USEFUL LINKS</h3>
  <a href="">Free theory notes</a><br>
  <a href="">Free Highway code</a><br>
  <a href="https://tims.ntsa.go.ke/login_csp.jsp"target="_blank">Book for Test</a><br>
  <a href="login.php">Book lessons</a>
</div>
<p>Copyrights&copy; 2021</p>

</div>


 <!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    

<!-- js plugins -->   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>