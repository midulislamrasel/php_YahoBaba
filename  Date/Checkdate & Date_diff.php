<?php
// checkdate(month,day,year)
echo checkdate(2, 3, 2023) . "<br>";

$date1 = date_create("2012-12-15");
$date2 = date_create("2013-12-15");

$diff = date_diff($date1, $date2);

echo $diff->format("%r%a") . "<br>";
echo $diff->format("%R%a");


echo "<pre>";
print_r($diff);
echo "</pre>";
