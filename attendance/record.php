<?php
include_once 'learner.php';
$lrn = new Learner();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learners Attendance</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

    <div class="container">
<?php 
	if (isset($insertattend)) {
		echo $insertattend;
	}
?>

    <div class="card">
            <div class="card-header">
                <h2>
                    <a class="btn btn-info float-right" href="attendance.php">Take Attendance</a>
                </h2>
            </div>
        <div class="card-body">
        <form action="" method="post">
					<table class="table table-striped">
						<tr>
                            <th >Serial No.</th>
							<th >Learner Name</th>
							<th >Attendance Date</th>
							<th >Action</th>
						</tr>
                        <?php
                            $getdate = $stu->getDateList();
                            if ($getdate) {
                                $i = 0;
                                while ($value = $getdate->fetch_assoc()) {
                                    $i++;
                        ?>

  					<tr>
							<td><?php echo $i; ?></td>
                            <td><?php echo $value['name']; ?></td>
							<td><?php echo $value['att_time']; ?></td>
							<td>
							<a class="btn btn-primary" href="addlearner.php?dt=<?php echo $value['att_time']; ?>">View</a>
							</td>
						</tr>
                    <?php
                        }
                        }
                    ?>
                        
                </table>
            </form>
        </div>
    </div>

</div>
    
</body>
</html>