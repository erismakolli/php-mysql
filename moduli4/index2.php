<?php 

$sports2=["football", "basketball","voleyball"];

echo $sports2[1]."<hr>";

echo end($sports2)."<hr>";

echo count($sports2)."<hr>";

for($count=0; $count<3; $count++){
    echo $sports2[$count]."<hr>";
}

array_push($sports2, 'golf');

for($count=0; $count<4; $count++){
    echo $sports2[$count]."<hr>";
}

array_pop($sports2);

var_dump($sports2);

array_unshift($sports2,'snooker');

var_dump($sports2);

array_shift($sports2);

var_dump($sports2);

$numbers=[1,2,3,4,5,6,7,8,9];

$mbledhja = array_sum($numbers);

echo $mbledhja. "<hr>";

?>