<?php
// array_merge() **index or Associative array
// array_merge_recursive()  **Multidimensional Associative Array
// array_combine()  ** Index Array


$a = ['a', 'b', 'c', 'd'];
$b = ['e', 'f', 'g', 'h'];

$c = array_merge($a, $b);

echo "<pre>";
print_r($c);
echo "<pre>";





$a = [
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd'
];
$b = [
    '1' => 'e',
    '2' => 'f',
    '3' => 'g',
    '4' => 'h'
];

$c = array_merge($a, $b);

echo "<pre>";
print_r($c);
echo "<pre>";





$a = [
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd'
];
$b = [
    '1' => 'e',
    '2' => 'f',
    '3' => 'g',
    'd' => 'h'
];

$c = array_merge($a, $b);

echo "<pre>";
print_r($c);
echo "<pre>";







$a = [
    'a' => 'a',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd'
];
$b = [
    '1' => 'e',
    '2' => 'f',
    '3' => 'g',
    'd' => 'h'
];

$c = array_merge_recursive($a, $b);

echo "<pre>";
print_r($c);
echo "<pre>";




$name = array("Rasel", "Midul", "Ajharul");
$age = array("35", "37", "43");

$newArray = array_combine($name, $age);
echo "<pre>";
print_r($newArray);
echo "<pre>";
