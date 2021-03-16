<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
                    <a href="home.html"><span class="las la-igloo"></span>Home</a>
                </li>
                <li>
                    <a href="clients.php"><span class="las la-users"></span>Clients</a>
                </li>
                <li>
                    <a href="instructor.php"><span class="las la-users"></span>Instructors</a>
                </li>
                <li>
                    <a href="activity.html"><span class="las la-clipboard"></span>Activities</a>
                </li>
                <li>
                    <a href="payment.html"><span class="las la-igloo"></span>Payments</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
            <div class="text">
                <h2>Registered Learners</h2>
            </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Learner No.</th>
                    <th>Learner Name</th>
                    <th>Learner Email</th>
                    <th>Learner Number</th>
                    <th>Progress</th>
                </tr>
            </thead>
        <tbody>
            <?php
            require_once("../config.php");

            $sql = $db-> prepare("SELECT * FROM user");
            $sql->execute();
            $users = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach ($users as $user) {
        ?>
        <tr>
            <td>
                <?php echo $user['id']; ?>
            </td>
            <td>
                <?php echo $user['firstname']; ?>
                <?php echo $user['lastname']; ?>
            </td>
            <td>
                <?php echo $user['email']; ?>
            </td>
            <td>
                <?php echo $user['number']; ?>
            </td>
            <td>
                <div class="form-check">
                    <div class="edit">
                        <input class="btn btn-primary" type="button" value="Edit">
                    </div>
                    <div class="del">
                        <input class="btn btn-primary" type="button" value="Delete">
                    </div>
                </div>
            </td>
        </tr>

        <?php       
            }
        ?>
        </tbody>
    </table>
    
    </div>

</body>
</html>