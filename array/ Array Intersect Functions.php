<?php
// array_intersect()
// array_intersect_key()
// array_intersect_assoc()
// array_intersect_uassoc()
// array_intersect_ukey()
// array_uintersect()
// array_uintersect_assoc()
// array_uintersect_uassoc()



// array_intersect()
$a1 = array(
    "a" => "Red",
    "b" => "green",
    "c" => "blue",
    "d" => "yellow",
);

$a2 = array(
    "a" => "red",
    "f" => "green",
    "d" => "purple",
);

$newArray = array_intersect($a1, $a2);
echo "<pre>";
print_r($newArray);
echo "</pre>";

// casesentave 
// output : [b] => green



// array_intersect_key()
$a1 = array(
    "a" => "Red",
    "b" => "green",
    "c" => "blue",
    "d" => "yellow",
);

$a2 = array(
    "a" => "red",
    "f" => "green",
    "d" => "purple",
);

$newArray = array_intersect_key($a1, $a2);
echo "<pre>";
print_r($newArray);
echo "</pre>";




// array_intersect_assoc()
$a1 = array(
    "a" => "Red",
    "b" => "green",
    "c" => "blue",
    "d" => "yellow",
);

$a2 = array(
    "a" => "red",
    "f" => "green",
    "d" => "purple",
);

$newArray = array_intersect_assoc($a1, $a2);
echo "<pre>";
print_r($newArray);
echo "</pre>";

// output 0


// array_intersect_uassoc()