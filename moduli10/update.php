<?php

include_once('confing.php');

if(isset($POST['update']))
    {

    $id = $_POST['id'];
    $username = $_POST['username'];
    $name = $POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];





$sql = "UPDATE users
SET username = :username,
name = :name,
surname =:surname,
email = :email
WHERE id = :id";





    }