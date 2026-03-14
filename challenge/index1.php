<?php

$host = "localhost";
$db ="ch";
$user = "root";
$pass = "";


try{
    $conn=new PDO ("mysql:host=$host;dbname=$db",$user,$pass);
    
 $sql= "CREATE TABLE category(
        id INT PRIMARY KEY,
        NAME VARCHAR(255) NOT NULL
        );


CREATE TABLE products (
id INT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
category_id INT NOT NULL ,
FOREIGN KEY(category_id) references category(id)
);

INSERT INTO category(id, name) VALUES
(1, 'acssesories'),
(2, 'furniture'),
(3, 'electronics');


INSERT INTO products(id, name, category_id) VALUES
(1,'apple watch',1),
(2,'sofa',2),
(3,'LG tv',3),
(4,'neckless',1),
(5,'iphone 17 pro',3),
(6,'hat',1),
(7,'gaming chair',2),
(8,'laptop',3),
(9,'rayban glasses',1),
(10,'gaming pc',3),
(11,'ring',1),
(12,'desk',2),
(13,'monitor',3),
(14,'ap',1),
(15,'airtag',3);


 ";

 $conn->exec($sql);

echo("");

}catch(Exeption $e){
    
echo("Not connected");

}

?>