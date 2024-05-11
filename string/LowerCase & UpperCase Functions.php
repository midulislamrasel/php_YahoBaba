<?php
// strtolower()
// strtoupper()
// ucfirst()
// ucwords()
// lcfirst()

$str = "Midul islam rasel";
$newstr = strtolower($str);
echo $newstr;
// midul islam rasel


$str = "Midul islam rasel";
$newstr = strtoupper($str);
echo $newstr;
// MIDUL ISLAM RASE

$str = "Midul islam rasel";
$newstr = ucfirst($str);
echo $newstr;
// Midul islam rasel


$str = "Midul islam rasel";
$newstr = ucwords($str);
echo $newstr;
// Midul Islam Rasel


$str = "Midul islam rasel";
$newstr = lcfirst($str);
echo $newstr;
//midul islam rasel