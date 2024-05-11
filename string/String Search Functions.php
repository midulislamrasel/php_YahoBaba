<?php
// strstr 
// strchr
// strrchr

$a = "hello world. The world is beutifull";
echo strstr($a, "world");
// world. The world is beutifull


$a = "hello world. The world is beutifull";
echo strrchr($a, "world");
// world is beutifull


$a = "hello world. The world is beutifull";
echo strpbrk($a, "w");
// world. The world is beutifull

echo "<br>";

echo strpbrk($a, "lo");
// llo world. The world is beutifull