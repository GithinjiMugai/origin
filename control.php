<?php

require_once 'config.php';

  if (!isset($_SESSION['user'])){
    header("location:login.php");
  }

  $sql = $db-> prepare("SELECT * FROM user_details");
  $sql->execute();
  $users = $sql->fetchAll(PDO::FETCH_ASSOC)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<style>
  .navbar .navbar-brand {
    font-size: 2rem;
    font-family: cursive;
    font-weight: bold;
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
                  <a class="nav-link active" aria-current="page" href="control.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./includes/details.php">Learner Driver</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./attendance/attendance.php">Attendance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        </div>  
        
  <!-- <div class="container pt-5" id="profile">
    <div class="jumbotron">
        <div class="modal-content">
          	<div class="modal-header">
            	<h4 class="modal-title"><b>My Profile</b></h4>
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
                    	<input type="email" class="form-control" id="email" name="email" value="" required>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Phone Number</label>

                    <div class="col-sm-9"> 
                      <input type="text" class="form-control" id="number" name="number" value="">
                    </div>
                </div>
                <div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">Firstname</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="firstname" name="firstname" value="">
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="lastname" class="col-sm-3 control-label">Lastname</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="lastname" name="lastname" value="">
                  	</div>
                </div>
                
                <hr>
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
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </div>	
            </form>
          	
        </div>
    </div>
</div> -->

<div class="container">
<table class="table table-hover">
            <thead>
                <tr>    
                    <th>ID No</th>     
                    <th>Learner Name</th>
                    <th>License Type</th>
                    <th>Payment</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>
            <?php foreach ($users as $user) {?>
        <tr>
            <td><?php echo $user['Id_No']; ?></td>
            <td>
                <?php echo $user['firstname']; ?>
                <?php echo $user['surname']; ?>
            </td>
            <td>
                <?php echo $user['license']; ?>
            </td>
            <td>
                <?php echo $user['msg']; ?>
            </td>
            <td>
                <a href="mailto: <?php echo $user['email']?>?&subject=Confirmation to DSLS!&body=Dear <?php echo $user['firstname']?>, we are glad to have you and be a part of us. Kindly visit our school and start your classes. Thank you!." target="_blank" class="btn btn-success" >Confirm</a>
                <a href="mailto: <?php echo $user['email']?>?&subject=Not Confirmed!&body=Sorry <?php echo $user['firstname']?>, kindly contact the school to sort your issue. Thank you!. Contact 0743411370 or githinjimugai@gmail.com "target="_blank" class="btn btn-warning" >Decline</a>
                <a onclick="return confirm('Are you sure you want to delete?')" href="discard.php?id=<?php echo $user['id']; ?>" class="btn btn-danger" >Discard</a>  
            </td>
        </tr>

        <?php } ?>
        </tbody>
    </table>
            </div>
    
</body>
</html>