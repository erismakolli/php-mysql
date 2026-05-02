<?php


include_once('config.php');

$sql = "DELETE FROM users WHERE id = :id";
$prep = $connect->prepare($sql);
$prep->bindParam(':id', $id);
$prep->execute();

?>