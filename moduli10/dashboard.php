<!DOCTYPE html>
<html lang="en">
<head>
   

    <title>Document</title>


<style>

table,td,th{
    border:1px solid;
    border:collapse:collapse;
}

 </style>

</head>

<body>


<?php

include_once('config.php');
$sql ="SELECT * FROM user";
$getUsers = $conn->prepare($sql);
$getUsers->execute();
$users=$getUsers->fetchALL();

?>



<table>
    <thead>
        <th>Id</th>
           <th>Name</th>
           <th>Surname</th>
        <th>Email </th>
</thead>

<tbody>

<?php

foreach($users as $user){
?>

<tr>

<td> <?=$user ['id']?> </td>
  <td> <?=$user ['id']?> </td>
    <td> <?=$user ['id']?> </td>
      <td> <?=$user ['id']?> </td>

</tr>
<?php
}

?>

</tbody>

</table>
<a href="add.php">add user</a>

</body>
</html>