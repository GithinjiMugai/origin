<?php
require_once 'config.php';

$id = $_GET['id'];
$sql = 'DELETE FROM user_details where id=:id';
$statement = $db->prepare($sql);
if ($statement->execute([':id' => $id])) {
    header ("location: control.php");
}