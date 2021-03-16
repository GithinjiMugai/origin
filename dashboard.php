<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./css/main.css"> -->
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
                  <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        </div>  


<div class="container">
    <div class="jumbotron p-5">
        <div class="">
            <button class="btn btn-primary">Prev</button> 
            <button class="btn btn-primary">Next</button>
            <i>Week 1</i>
        </div><br>

        <table class="table table-bordered">
            <thead>
                <tr>
                  <th scope="col">Monday</th>
                  <th scope="col">Tuesday</th>
                  <th scope="col">Wednesday</th>
                  <th scope="col">Thursday</th>
                  <th scope="col">Friday</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox">
                    <p>Active</p></td>
                  <td><input type="checkbox">
                    <p>Active</p></td>
                  <td><input type="checkbox">
                    <p>Active</p></td>
                  <td><input type="checkbox">
                    <p>Active</p></td>
                  <td><input type="checkbox">
                    <p>Active</p></td>
                </tr>
                </tbody>
        </table>

        <?php
          require_once "config.php";
          $sql = $db->prepare("select * from user_details");
          $sql->execute();
          $users = $sql->fetchAll();
          foreach($users as $user) { 
        ?>

        <h2>My Personal details</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Surname</th>
                  <th scope="col">Firstname</th>
                  <th scope="col">Email</th>
                  <th scope="col">County</th>
                  <th scope="col">Address</th>
                  <th scope="col">Nationality</th>
                  <th scope="col">Birth Date</th>
                  <th scope="col">License</th>
                  <th scope="col">Phone</th>
                  <th scope="col">KRA Pin</th>
                  <th scope="col">Gender</th>
                  <th scope="col">City</th>
                  <th scope="col">Branch</th>
                  <th scope="col">School</th>
                  <th scope="col">PDL</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $user['Id_No']; ?></td>
                  <td><?php echo $user['surname']; ?></td>
                  <td><?php echo $user['firstname']; ?></td>
                  <td><?php echo $user['email']; ?></td>
                  <td><?php echo $user['county']; ?></td>
                  <td><?php echo $user['address']; ?></td>
                  <td><?php echo $user['nationality']; ?></td>
                  <td><?php echo $user['dob']; ?></td>
                  <td><?php echo $user['license']; ?></td>
                  <td><?php echo $user['phone']; ?></td>
                  <td><?php echo $user['kra']; ?></td>
                  <td><?php echo $user['gender']; ?></td>
                  <td><?php echo $user['city']; ?></td>
                  <td><?php echo $user['branch']; ?></td>
                  <td><?php echo $user['school']; ?></td>
                  <td><?php echo $user['upload']; ?></td>
                </tr>
                </tbody>
        </table>
        <?php
          }
        ?>
    </div>
</div>




<!-- <div class="container-dash">
    <center>
        <br><br><br><br>
        <div class="records-container">

            <div class="duration">
                <div class="slides">
                    <div class="prev">
                        <button>Prev</button>
                    </div>
                    <div class="next">
                        <button>Next</button>
                    </div>
                </div>

                <div class="content">

                </div>
            </div>
            


            <div class="records">
                <div class="check">

                </div>
                <div class="status">

                </div>
            </div>

</div>
    </center>
</div> -->
</body>
</html>