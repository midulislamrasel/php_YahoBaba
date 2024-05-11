<?php
// explode(separator,string,limit) 
// implode(separator,array)


$a = "Hello How Are YOU";
$newA = explode(" ", $a);

echo "<pre>";
print_r($newA);
echo "</pre>";




$a = "Hello How Are YOU";
$newA = explode(" ", $a, 3);

echo "<pre>";
print_r($newA);
echo "</pre>";





$a = "Mina. Hello How. Are YOU";
$newA = explode(". ", $a);

echo "<pre>";
print_r($newA);
echo "</pre>";
//output
// Array
// (
//     [0] => Mina
//     [1] => Hello How
//     [2] => Are YOU
// )




$b = ["Mina", "How", "Are", "You"];
$newB = implode(" ", $b);


echo "<pre>";
print_r($newB);
echo "</pre>";
// output  Mina How Are You
