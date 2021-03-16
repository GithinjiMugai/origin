<?php 
    if(isset($_POST['submit'])) {
        try{
        $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        $email      = $_POST['email'];
        $number     = $_POST['number'];
        $password   = $_POST['password'];

            //Encrypt password
            $password = password_hash($password,PASSWORD_DEFAULT);
            
            $STH = $db->prepare("INSERT INTO user(firstname, lastname, email, number, password) values(?,?,?,?,?)");
            $data = array($firstname,$lastname,$email,$number,$password);
            $STH->execute($data); 

            header("refresh: 1, url= ./includes/enrollme.php");

            
        }
        catch(PDOException $e){
            $_SESSION['error'] = "I'm sorry, $firstname. I'm afraid I can't register you.";
            file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND); # log errors to afile
        }
    }
?>
