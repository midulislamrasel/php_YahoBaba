<?php
// date_create(time,timezone) 
// date_format(object,format)

$date = date_create("2025-03-23 22:23:04");

echo date_format($date, "d/m/y H:i:s") . "<br>";


$date = date_create("2025-03-23 22:23:04", timezone_open("Asia/Dhaka"));

echo date_format($date, "d/m/y H:i:s") . "<br>";
