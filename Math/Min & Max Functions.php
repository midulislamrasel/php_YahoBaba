<?php

echo min(23, 24, 24, 3, 23, 432, 53, 53);
// 3 

echo max(23, 24, 24, 3, 23, 432, 53, 53);
// 432


echo max(array(23, 24, 24, 3, 23, 432, 53, 53));
// 432

$val = min(array(3, 5, 6,), array(3, 4, 7));

echo "<pre>";
print_r($val);
echo "</pre>";
// (
//     [0] => 3
//     [1] => 4
//     [2] => 7
// )