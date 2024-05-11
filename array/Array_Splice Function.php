<?php
$a = ["Anni", "Mim", "Mizan", "Omor", "Jakariya"];
$b = ["Aminul", "Naeemur"];


$d = array_splice($a, 1, 2, $b);

echo "<pre>";
print_r($a);
echo "</pre>";
// output ["Anni", "Aminul", "Naeemur", "Omor", "Jakariya"];




$a = ["Anni", "Mim", "Mizan", "Omor", "Jakariya"];
$b = ["Aminul", "Naeemur"];


array_splice($a, 1, 2, $b);

echo "<pre>";
print_r($a);
echo "</pre>";
// output ["Anni", "Aminul", "Naeemur", "Omor", "Jakariya"];
