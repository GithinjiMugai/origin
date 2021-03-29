<?php 

require_once("../config.php");
$id = $_GET['id'];
$sql = 'SELECT * FROM user WHERE id=:id';
$statement = $db->prepare($sql);
$statement -> execute([':id' => $id]);
$user = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['firstname']) && isset($_POST['lastname']) && isset ($_POST['email']) && isset ($_POST['number'])) {
    $firstname  = $_POST['firstname'];
    $lastname   = $_POST['lastname'];
    $email      = $_POST['email'];
    $number     = $_POST['number'];
    $sql = 'UPDATE user SET firstname=:firstname, lastname=:lastname, email=:email, number=:number WHERE id=:id';
    $statement = $db->prepare($sql);
    if ($statement-> execute([':firstname' => $firstname, ':lastname' => $lastname, ':email' => $email, ':number' => $number, ':id' => $id,])) {
        echo "Sucessfully Edited";
        
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Editing area</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <?php if(!empty($message)) { ?>
                <div class="alert alert-success">
                    <?php echo $message; ?>
                </div>
            
                <?php } ?>
                <div class="form-header">
                    <h2>Edit Learner details</h2>
                </div>
                
            <form method="POST">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Firstname</label>
                    <input type="text" name="firstname" id="firstname" value="<?= $user->firstname?>" >
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Lastname</label>
                    <input type="text" name="lastname" id="lastname" value="<?= $user->lastname?>" >
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <input type="email" name="email" id="email" value="<?= $user->email?>" >
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Phone number</label>
                    <input type="text" name="number" id="number" value="<?= $user->number?>" >
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="clients.php" class="btn btn-primary" >Back</a>
                </div>
                
                
            </form>

        </div>

    </div>
</body>
</html>