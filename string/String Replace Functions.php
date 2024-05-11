<?php
// str_replace()
// str_ireplace()
// substr_replace()
// strtr()




$a = "I love php , i love php too !";

//case-sensitive
echo str_replace("php", "python", $a);
// I love python , i love python too !


//case-insensitive
echo str_ireplace("Php", "python", $a);
// I love python , i love python too !


$a = "i love php , i love php too !";
substr_replace($a, "php,i love", "python and", 1);



$a = "I love php, I love php too!";
$find = ["love", "php"];
$replace = ["hi", "earth"];

echo str_replace($find, $replace, $a);
// I hi earth, I hi earth too!



$a = "I love php , i love php too !";
echo str_replace("lo", "Lk", $a);
// I Lkve php , i Lkve php too !
