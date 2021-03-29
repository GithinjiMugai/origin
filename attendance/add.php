<?php

require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take attendance</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>

<?php 
        error_reporting(0);
        $cur_date = date('Y-m-d');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $attend = $_POST['attend'];
            $insertattend = $stu->insertAttendance($attend);
        }
    ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="modal-title" >Add Attendance</h5>
            <a class="btn btn-info float-right" href="attendance.php">View</a>
        </div>

    <div class="card-body">
        <div class="form-group">
            <div class="row">
            <label class="col-md-4 text-right">Attendance Date <span class="text-danger">*</span></label>
                <div class="col-md-8">
                    <?php echo $cur_date; ?>
                </div>
            </div>
        </div>

<form action="" method="post">
    <div class="form-group">
        <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr class="text-center">
                    <th>Id No.</th>
                    <th>Learner Name</th>
                    <th>Attendance</th>
                  </tr>
                </thead>
                <?php

            $sql = $db->prepare("select * from user_details");
            $sql->execute();
            $users = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach($users as $user) { 
                ?>
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
                            <input type="radio" name="attendance_status<?php echo $user["Id_No"]; ?>" value="Present">
                            <input type="radio" name="attendance_status<?php echo $user["Id_No"]; ?>" value="Absent">
                        </td>
                       
                    </tr>
            <?php
            }
            ?>
                    <tr>
                        <td colspan="4" class="text-center">
                            <input type="submit" name="submit" class="btn btn-primary px-5" value="Mark">
                        </td>
                    </tr>
            </table>
      </form>
            </div>
        </div>
     </div>
    </div>
</div>
</body>
</html>
