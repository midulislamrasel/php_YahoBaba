<?php

$str = "Hello I am 'Yahoo Baba'";

echo $str . "</br>";
// Hello I am 'Yahoo Baba'


echo addslashes($str) . "</br>";
// Hello I am \'Yahoo Baba\'

$newStr = addslashes($str);
echo stripslashes($newStr);
// Hello I am 'Yahoo Baba'


echo "</br>";

$str = "Welcome to my humble Homepage!";
echo $str . "<br>";
// Welcome to my humble Homepage!
echo addcslashes($str, 'm') . "<br>";
// Welco\me to \my hu\mble Ho\mepage!
echo addcslashes($str, 'H') . "<br>";
// Welcome to my humble \Homepage!
echo addcslashes($str, 'A...Z') . "<br>";
// Welcome to my humble Homepage!
echo addcslashes($str, 'a...z') . "<br>";
// \W\e\l\c\o\m\e \t\o \m\y \h\u\m\b\l\e \H\o\m\e\p\a\g\e!