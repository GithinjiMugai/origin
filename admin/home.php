<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span class="las la-accusoft"></span>DSLS</h1>
        </div><br>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="home.php"><span class="las la-igloo"></span>Home</a>
                </li>
                <li>
                    <a href="clients.php"><span class="las la-users"></span>Clients</a>
                </li>
                <li>
                    <a href="instructor.php"><span class="las la-users"></span>Instructors</a>
                </li>
                <li>
                    <a href="activity.php"><span class="las la-clipboard"></span>Activities</a>
                </li>
                <li>
                    <a href="payment.php"><span class="las la-igloo"></span>Payments</a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="main-content">
        <header>
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="user-wrapper">
<?php

session_start();

$_SESSION["firstname"] = "Githinji";
$_SESSION["lastname"] = "Mugai";

echo 'Welcome ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];

?>
                <div>
                    <small>Super admin</small><br>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </header>

        <main>

            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                
                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Projects</span>
                    </div>
                    <div>
                        <span class="las la-clipboard"></span>
                    </div>
                </div>
                
                <div class="card-single">
                    <div>
                        <h1>10k</h1>
                        <span>Payments</span>
                    </div>
                    <div>
                        <span class="las la-wallet"></span>
                    </div>
                </div>
            </div>
        </main>



    </div>
</body>
</html>