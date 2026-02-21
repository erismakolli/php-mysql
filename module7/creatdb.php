<?php

$host = "localhost";
$user = "root";
$pass = "";


try{
    $conn=new PDO ("mysql:host=$host",$user,$pass);
    
 $sql="CREATE DATABASE testERIS";

 $conn->exec($sql);

echo("Database created");

}catch(Exeption $e){
    
echo("Not connected");

}

?>