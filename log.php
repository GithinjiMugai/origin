<?php

if(isset($_POST['submit'])){
    try{
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $STH = $db->prepare("SELECT * FROM user WHERE email=?");
    $data = array($email);
    $STH->execute($data);

    $rows_affected = $STH->rowCount();
    if ($rows_affected == 1){
        $row = $STH->fetch();
        $db_pass = $row['password'];

        if(password_verify($password, $db_pass))
                {
                    $_SESSION['success'] = "Login Successfull";
                    $_SESSION['user'] = $row['id'];
                    $row['is_staff'] == 1?
                    
                    header("location: control.php"):header("location:dashboard.php");                
                }
                else 
                $_SESSION['error'] = "Incorrect Password";
            }
            else 
            $_SESSION['error'] = "Email does not exist";            
        }
        catch(PDOException $e){
            $_SESSION['error'] = "I'm afraid I can't Log you in at the moment. Please contact the administration!";
            file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND); # log errors to afile
        }

    }

?>