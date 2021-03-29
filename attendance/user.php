<?php

if (isset($_POST['submit'])) {
    $attend   = $_POST['attend'];
    $att_time = $_POST['att_time'];

    $STH = $db->prepare("INSERT INTO attendance(attend, att_time) values(?,?)"); 
    $data = array($attend, $att_time);
    $STH->execute($data);

    header("location:attendance.php");

}