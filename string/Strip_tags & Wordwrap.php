<?php
$str = "hello <b>World</b>, Hello <i>Earth</i>";
echo $str . "<br>";

echo strip_tags($str);

echo strip_tags($str, "<b>");

echo strip_tags($str, "<i>") . "<br>";


$str = "This World is beautifull";
echo wordwrap($str, 5, "<br>") . "<br>";


$str = "This World is beautifull";
echo wordwrap($str, 5, "<br>", TRUE);
