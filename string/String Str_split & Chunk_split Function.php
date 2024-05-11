<?php

$a = "Hello";
$nowA = str_split($a, 1);

echo "<pre>";
print_r($nowA);
echo "</pre>";

// output 
// [0] => H
// [1] => e
// [2] => l
// [3] => l
// [4] => o




$a = "Hello";
$newA = chunk_split($a, 2);
echo "<pre>";
print_r($newA);
echo "</pre>";

// output 
// He
// ll
// o 
