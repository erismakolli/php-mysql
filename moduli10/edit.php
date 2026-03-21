<?php

include_once("config.php");

$id= $_GET['id'];

$sql ="SELECT * FROM users WHERE id= :id";

$getUsers =$conn-> prepare($sql);

$getUsers->bindParam(":id", $id );

$getUsers->execute();

$data = $prep -> fetch();

?>