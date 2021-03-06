<?php
require_once 'config.php';

if (!isset($_SESSION['user'])){
  header("location:login.php");
}

// $id = $_GET['id'];
$sql = 'SELECT * FROM user WHERE id=:id';
$statement = $db->prepare($sql);
$statement -> execute([':id' => $id]);
$user = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['firstname']) && isset($_POST['lastname']) && isset ($_POST['email']) && isset ($_POST['number'])) {
    $firstname  = $_POST['firstname'];
    $lastname   = $_POST['lastname'];
    $email      = $_POST['email'];
    $number     = $_POST['number'];
    $sql = 'UPDATE user SET firstname=:firstname, lastname=:lastname, email=:email, number=:number WHERE id=:id';
    $statement = $db->prepare($sql);
    if ($statement-> execute([':firstname' => $firstname, ':lastname' => $lastname, ':email' => $email, ':number' => $number, ':id' => $id,])) {
        echo "Sucessfully Edited";
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<style>
.navbar .navbar-brand {
    font-size: 2rem;
    font-family: cursive;
    font-weight: bold;
}

.footer {
    display: flex;
    background-color: black;
    color: whitesmoke;
    justify-content: space-around;
}

.footer .resources li{
    list-style: none;
}

.footer .links h3 {
    text-align: center;
}
.footer .links a{
    text-decoration: none;
    display: block;
    text-align: center;
    color: white;
}
</style>
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
                  <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="class.php">Classroom</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="includes/enrollme.php">Enroll</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" target="_blank" href="https://tims.ntsa.go.ke/login_csp.jsp">Book Test</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" target="_blank" href="https://youtu.be/_ftY9yka9rc">Learn to Drive</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#call">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        </div>  

  <div class="container pt-5" id="profile">
    <div class="jumbotron">
        <div class="modal-content">
        <h3 class="text-danger"><i>Kindly view your email after you have enrolled for classes for further details. Thank you! <br> If Email not sent, feel free to contact us!</i></h3>
          	<div class="modal-header">
            	<h4 class="modal-title"><b>Edit my Profile</b></h4>

          	</div>
          	<div class="modal-body">
              <?php if (!empty($message)) { ?>
                <div class="alert alert-success">
                  <?php echo $message; ?>
                </div>
                <?php } ?>
            	<form class="form-horizontal" method="POST" action="">
          		  <div class="form-group">
                  	<label for="email" class="col-sm-3 control-label">Email</label>
                  	<div class="col-sm-9">
                    	<input type="email" class="form-control" id="email" name="email" value="<?= $user->email?>" required>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Phone Number</label>

                    <div class="col-sm-9"> 
                      <input type="text" class="form-control" id="number" name="number" value="<?= $user->number?>">
                    </div>
                </div>
                <div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">Firstname</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="firstname" name="firstname" value="<?= $user->firstname?>">
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="lastname" class="col-sm-3 control-label">Lastname</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="lastname" name="lastname" value="<?= $user->lastname?>">
                  	</div>
                </div>
                
                <!-- <hr>
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Password:</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Comfirm Password:</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="input current password to save changes">
                    </div>
                </div> -->
          	</div>
          	<div class="modal-footer">
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </div>	
            </form>
          	
        </div>
    </div>
</div>




<!-- footer -->
<div class="footer pt-5">
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
  <a href="">Book lessons</a>
</div>

<p>DSLS &copy; 2021</p>

</div>


<!-- js -->

<script src="js/main.js"></script>

</body>
</html>