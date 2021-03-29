<?php
    if(isset($_POST['submit'])) {
        
        $Id_No      = $_POST['Id_No'];
        $surname    = $_POST['surname'];
        $firstname  = $_POST['firstname'];
        $email      = $_POST['email'];
        $county     = $_POST['county'];
        $address    = $_POST['address'];
        $nationality= $_POST['nationality'];
        $dob        = $_POST['dob'];
        $license    = $_POST['license'];
        $phone      = $_POST['phone'];
        $kra        = $_POST['kra'];
        $gender     = $_POST['gender'];
        $msg        = $_POST['msg'];
        $upload     = $_POST['upload'];

        $STH = $db->prepare("INSERT INTO user_details(Id_No, surname, firstname, email, county, address, nationality, dob, license, phone, kra, gender, msg, upload) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)"); 
        $data = array($Id_No, $surname, $firstname, $email, $county, $address, $nationality, $dob, $license, $phone, $kra, $gender, $msg, $upload);
        $STH->execute($data);

        header("refresh: 1, url = ../dashboard.php");

            
        }

?>