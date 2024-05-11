<?php
// date_default_timezone_get()
// date_default_timezone_set();
// timezone_open()
// timezone_name_get()
// timezone_location_get()
// timezone_identifiers_list()

echo date_default_timezone_get() . "<br>";

echo date_default_timezone_set("Asia/Dhaka") . "<br>";
echo date_default_timezone_get();


$tz = timezone_open("Asia/Dhaka");
echo timezone_name_get($tz);

echo "<pre>";
print_r("timezone_location_get($tz)");
echo "</pre>";
// timezone_open()


echo "<pre>";
print_r(timezone_identifiers_list());
echo "</pre>";
