<?php
require_once '../config.php';

if(isset($_SESSION['user']) && $db_user['is_superadmin'] == 0) {
    header("location:../login.php");
}

if(isset($_SESSION['user']) && $db_user['is_superadmin'] == 1) {
    header("location:home.php");
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
.container {
    display: flex;
    align-items: center;
    justify-content: center;

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
    font-size: 1rem;
    color: white;
    cursor: pointer;
    margin-top: 10px;
}

.btn:hover {
    background-color: cadetblue;
}

</style>
<body>

    <div class="container">
        <div class="form-container">
            <?php
            require_once 'admin.php';
            ?>
            <?php
            require_once "../feedback.php";
            ?>
            <form action="index.php" method="POST">
                <h2>Admin Login</h2>

                <div class="input-group">
                    <label for="email">
                        <h3>Email</h3>
                        <input type="email" name="email" placeholder="Enter Email" required>
                    </label>
                </div>

                <div class="input-group">
                    <label for="password">
                    <h3>Password</h3>
                    <input type="password" name="password" placeholder="Enter Password" required>
                </label> <br>
                </div>

                <div class="input-group">
                    <button class="btn" type="submit" id="login" value="Submit">Sign In</button>
                </div>
                 
            </form>  
        </div>
    </div>
    
 <!-- <script src="script.js"></script>    -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>