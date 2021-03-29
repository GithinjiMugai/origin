<?php

$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'driving-school';


try{
    $db = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    session_start();

    if(isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $STH = $db->prepare("SELECT * FROM user WHERE id=?");
        $data = array($id);
        $STH->execute($data);

        $rows_affected = $STH->rowCount();
        if ($rows_affected == 1){
            $db_user = $STH->fetch();
        } else{
            $_SESSION['error'] = "User does not exist";
            unset($_SESSION['user']); 
            }
        }
          
    }



    catch(PDOException $e){
        echo "Error 500: Internal Server Error";
        file_put_contents('PDOErrors.txt', "\n".$e->getMessage(), FILE_APPEND); # log errors to afile
    }

?>