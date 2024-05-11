<?php

$a = "hello world";
$newA = strlen($a);

echo $newA;
// output 11
echo "</br>";


$a = "hello world";
$newA = str_word_count($a);
echo $newA;
// output 2
echo "</br>";

$a = "hello World Hello hello";
$newA = substr_count($a, "hello");
echo $newA;
//Casesensetive
//output 2;
