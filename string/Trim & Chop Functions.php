<?php
// trim( string, charlist)
// rtrim( string, charlist)
// ltrim( string, charlist)
//  chop( string , charlist)


$a = "hello  ";
echo $a . "<br>";

// start and list chack 
echo trim($a, "hl");
// ello
echo "<br>";

echo trim($a);
