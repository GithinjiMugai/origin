<?php
    session_start();
    unset($_SESSION['user']);
    header('refresh: 1; URL = login.php');

?>