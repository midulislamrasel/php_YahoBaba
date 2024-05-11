<?php
// array_keys();
// array_key_first();
// array_key_last();
// array_keys_exists();
// key_exists();

$color = ["Red", "Green", "Blue", "Yellow"];
$newArray = array_keys($color);


echo "<pre>";
print_r($newArray);
echo "<pre>";



$color = [
    "first" => "Red",
    "second" => "Green",
    "third" => "Blue",
    "fourth" => "Yellow"
];
$newArray = array_keys($color);


echo "<pre>";
print_r($newArray);
echo "/<pre>";




$color = [
    "first" => "Red",
    "second" => "Green",
    "third" => "Blue",
    "fourth" => "Yellow"
];

$newArray = array_key_first($color);
echo "<pre>";
print_r($newArray);
echo "<pre>";

$newArray = array_key_last($color);
echo "<pre>";
print_r($newArray);
echo "<pre>";




// key_exists()
$color = [
    "first" => "Red",
    "second" => "Green",
    "third" => "Blue",
    "fourth" => "Yellow"
];
$newArray = key_exists("third", $color);
if ($newArray) {
    echo "key Exists !";
} else {
    echo "key does not exist";
}
