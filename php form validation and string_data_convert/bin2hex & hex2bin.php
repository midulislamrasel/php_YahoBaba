<?php
// convert ASCll characters to hexadechimal values
// bin2hex(string);

$a = "Hello World";
echo bin2hex($a) . "<br>";
// 48656c6c6f20576f726c64

$b = "48656c6c6f20576f726c64";
echo hex2bin($b);
