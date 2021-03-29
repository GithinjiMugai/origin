<?php
    require_once '../config.php';

    if((isset($_SESSION['user'])) && $user['is_admin'] == 0 ){ 
        header("location:../login.php");
      } else {
      
      if (isset($_SESSION['user']) && $user['is_admin'] == 1 ){
        header("location:home.php");
       }
      }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>

<style>
body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 80vh;
}
.container {
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.3);
    width: 400px;
    max-width: 100%;
}

.form-container h2 {
    text-align: center;
    font-size: 2rem;
    color: cadetblue;
}

.form-container h3 {
    text-align: center;
}

.btn {
    background-color: blue;
    width: 100%;
    font-size: 1.5rem;
    color: white;
    cursor: pointer;
    margin-top: 10px;
    margin-bottom: 20px;
}

.btn:hover {
    background-color: cadetblue;
}

</style>
<body>

    <div class="container">
        <div class="form-container">
            <?php
                require_once "admin.php";
            ?>
            <div id="alert">
                <?php
                    require_once "../feedback.php";
                ?>
            </div>
            <form action="login.php" method="POST">
                <h2>Admin Login</h2>

                <div id="email_warning" class="input-group">
                    <label for="email">
                        <h3>Email</h3>
                        <input id="email" type="email" name="email" placeholder="Enter Email" required>
                    </label>
                </div>

                <div id="pass_warning" class="input-group">
                    <label for="password">
                    <h3>Password</h3>
                    <input id="password" type="password" name="password" placeholder="Enter Password" required>
                </label>
                </div>

                <div id= "result"></div>
                <br>

                    <button class="btn" type="submit" id="login_admin" name="submit">Login</button>
                 
            </form>  
<div class="footer">
  <center>
   <p>DSLS &copy; 2021</p> 
  </center>
</div>
        </div>
    </div>

 <!-- <script src="script.js"></script>    -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>