<?php
require_once '../config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learners Attendance</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<style>
.navbar .navbar-brand {
    font-size: 2rem;
    font-family: cursive;
    font-weight: bold;
}

.page {
    display: flex;
    justify-content: space-around;
}

.page #unset a {
    text-decoration: none;
    color: #999;
    transition: .3s;
}

.page #unset a:hover {
    color: lightblue;
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
                  <a class="nav-link active" aria-current="page" href="../control.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../includes/details.php">Learner Driver</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="attendance.php">Attendance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        </div> 
<?php
        // $cur_date = date('Y-m-d');  
?>
<div class="attendace_form">
<div class="container">
<div class="header">
<label class="col-md-4 text-center"><h3><i>Attendance Record </i></h3><span class="text-danger">*</span></label>
<!-- <?php echo $cur_date; ?> -->
</div>
    <?php
 require_once 'user.php';
        ?>

<form action="attendance.php" method="post">
<div class="form-group">
<table class="table table-striped table-bordered">
    <thead>
      <tr class="text-center">
        <th>Id No.</th>
        <th>Learner Name</th>
        <th>Status</th>
        <th>Attendance Date</th>
      </tr>
    </thead>
</div>
<?php
           
            $sql = $db->prepare("select * from user_details");
            $sql->execute();
            $users = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach($users as $user) { 
                
                ?>
<div class="form-group">
<tr class="text-center">
                        <td>
                          <?php echo $user["Id_No"]; ?>
                            <input type="hidden" name="Id_No[]" value="<?php echo $user["Id_No"]; ?>" disabled>
                        </td>
                        <td>
                          <?php echo $user['firstname']; ?>
                            <input type="hidden" name="firstname[]" value="<?php echo $user['firstname']; ?>" disabled>
                        </td>
                        <td align="center">
                              <input type="radio" name="attend" value="Present">P
                              <input type="radio" name="attend" value="Absent">A
                        </td>
                        <td>
                          <input type="date" name="att_time">
                        </td>
                    </tr>
</div>
          <?php
            }
          ?>
<div class="form-group">
<tr>
              <td colspan="4" class="text-center">
              <button type="submit" name="submit" class="btn btn-primary">Mark</button>
                
              </td>
            </tr>

            </table>
</div>

    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<!-- Add attendance modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Attendance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php 
        error_reporting(0);
        $cur_date = date('Y-m-d');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $attend = $_POST['attend'];
            $insertattend = $stu->insertAttendance($attend);
        }
    ?>
<div class="modal-body">
<div class="form-group">
    <div class="row">
    <label class="col-md-4 text-right">Attendance Date <span class="text-danger">*</span></label>
        <div class="col-md-8">
            <?php echo $cur_date; ?>
        </div>
    </div>
</div>


        <div class="modal-footer">
          <input type="hidden" name="attendance_id" id="attendance_id" />
          <input type="hidden" name="action" id="action" value="Add" />
          <input type="submit" name="button_action" id="button_action" class="btn btn-success btn-sm" value="Mark" />
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
    </div>
      </div>
      
    </div>
  </div>
</div>


<?php

// if(isset($_POST["button_action"])) {
//     if($_POST["button_action"]){
//         $query = "select * from user_details 
//         inner join attendance_record on user_details.Id_No 
//         = attendance_record.Id_No";
//     }
    
// }