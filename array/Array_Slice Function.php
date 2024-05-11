<?php
$a = ['Sanjay', 'Aman', 'Rehman', 'Karan'];

$b = array_slice($a, 2, 3);

echo "<pre>";
print_r($b);
echo "</pre>";



$a = ['Sanjay', 'Aman', 'Rehman', 'Karan'];
$b = array_slice($a, -2, 2, true);

echo "<pre>";
print_r($b);
echo "</pre>";
