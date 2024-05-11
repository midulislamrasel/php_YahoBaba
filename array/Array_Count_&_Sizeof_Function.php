<?php
$food = array("orange", "Bannana", "Apple", "Grapes");

// echo sizeof($food);
// echo "</br>";
// echo count($food);

$len = count($food);
for ($i = 0; $i < $len; $i++) {
    echo $food[$i] . "<br>";
}
