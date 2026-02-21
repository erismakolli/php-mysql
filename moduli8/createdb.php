<?php

$host = "localhost";
$db ="testeris";
$user = "root";
$pass = "";


try{
    $conn=new PDO ("mysql:host=$host;dbname=$db",$user,$pass);
    
 $sql= "CREATE TABLE users (
 id INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR (255) NOT NULL,
 password VARCHAR(255) NOT NULL 

);
CREATE TABLE category(
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
(1, 'fruta'),
(2, 'bakery'),
(3, 'fastfood');


INSERT INTO products(id, name, category_id) VALUES
(1,'Molla',1),
(2,'Torte',2),
(3,'pizza',3),
(4,'dardha',1),
(5,'hamburger',3);


 ";

 $conn->exec($sql);

echo("");

}catch(Exeption $e){
    
echo("Not connected");

}

?>