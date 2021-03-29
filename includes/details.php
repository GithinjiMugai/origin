<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learner Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<style>
body {
    margin: 0;
    font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: whitesmoke;
}

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
                  <a class="nav-link active" aria-current="page" href="details.php">Learner Driver</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../attendance/attendance.php">Attendance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        </div> 

<div class="container">
    <div class="jumbotron p-5">

        <?php
          require_once "../config.php";
          $sql = $db->prepare("select * from user_details");
          $sql->execute();
          $users = $sql->fetchAll();
          foreach($users as $user) { 
        ?>
   
        <td><?php echo $user['firstname']; ?></td>
        <h2>My Personal details</h2>
        <table class="table table-bordered">
          <thead>
             <tr>
              <th scope="col">ID</th>
              <td><?php echo $user['Id_No']; ?></td>
              <td><scope="col"><strong>Phone</strong></td>
              <td><?php echo $user['phone']; ?></td>
             </tr> 
             <tr>
              <th scope="col">Surname</th>
              <td><?php echo $user['surname']; ?></td>
              <td><scope="col"><strong>KRA Pin</strong></td>
              <td><?php echo $user['kra']; ?></td>
             </tr>
             <tr>
              <th scope="col">Firstname</th>
              <td><?php echo $user['firstname']; ?></td>
              <td><scope="col"><strong>Gender</strong></td>
              <td><?php echo $user['gender']; ?></td>
            </tr>
            <tr>
              <th scope="col">Nationality</th>
              <td><?php echo $user['nationality']; ?></td>
              <td><scope="col"><strong>PDL</strong></td>
              <td><?php echo $user['upload']; ?></td>
            </tr>
            <tr>
              <th scope="col">Email</th>
              <td><?php echo $user['email']; ?></td>
              <td><scope="col"><strong>Payment</strong></td>
              <td><?php echo $user['msg']; ?></td>
            </tr>
            <tr>
              <th scope="col">County</th>
              <td><?php echo $user['county']; ?></td>
              <th scope="col">Address</th>
              <td><?php echo $user['address']; ?></td>
            </tr>
            <tr>
               <th scope="col">Birth Date</th>
               <td><?php echo $user['dob']; ?></td>
               <td><scope="col"><strong>License</strong></td>
               <td><?php echo $user['license']; ?></td>
            </tr>
          </thead>

        </table>
        <?php
          }
        ?>


</body>
</html>