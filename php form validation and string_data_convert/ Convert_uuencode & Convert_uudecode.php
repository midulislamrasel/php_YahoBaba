<!-- This function used message save Database in uuencode -->
<?php
// uuencode algorithm 
// convert_uudecode(string)

// convert_uudecode(string)


$str = "Hello World";

$newStr =  convert_uuencode($str);
echo $newStr . "<br>";
// +2&5L;&\@5V]R;&0` `

echo convert_uudecode($newStr);
// Hello World