<?php

include_once('config.php');

$id = $_GET['id'] ?? null;
$name = "New Name"; 

$sql = "UPDATE users SET name = :name WHERE id = :id";
$prep = $connect->prepare($sql);
$prep->bindParam(':name', $name);
$prep->bindParam(':id', $id);
$prep->execute();

?>