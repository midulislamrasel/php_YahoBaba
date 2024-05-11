<?php
$food = array('orange', '44', 'banana', 'apple', 'grapes');
//first on serch on secend on array name
// echo in_array('apple', $food); 

if (in_array(44, $food, true)) {
    echo "Find Successfully";
} else {
    echo "Can't Find";
}



echo "</br>";



$a = array(
    array('h', 'd'),
    array('s', 's'),
    array('p', 'g'),
);
if (in_array(array('h', 'd'), $a)) {
    echo "Find Successfully";
} else {
    echo "Can't Find";
}




echo "</br> </br>";





$food = array('orange', '44', 'banana', 'apple', 'grapes');

echo array_search('banana', $food);
