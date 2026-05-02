<?php

session_start();

include_once('config.php');

$sql = "SELECT * FROM users";

$selectUser = $connect->prepare($sql);
$selectUser->execute();


$user_data = $selectUser->fetchALL();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<style>
    table,th,td{
        border:1px solid black;
    }

    td,th{
        padding:20px;
    }
</style>
</head>
<body>
    

<table>
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>


    <tr>
        <?php
            foreach($user_data as $user){
        
        ?>


        <td><?= $user['name']?></td>
        <td><?= $user['surname']?></td>
        <td><?= $user['username']?></td>
        <td><?= $user['email']?></td>
        <td><?= $user['password']?></td>
         <td><a href="delete.php?id=<?= $user['id'] ?>">DELETE</a></td>
         <td><a href="update.php?id=<?= $user['id'] ?>">UPDATE</a></td>


        </tr>


                <?php } ?>


</table>

</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>