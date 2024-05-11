<?php
// date_time_set(object,hour,minute,second,microsecond)

$date  = date_create("2024-03-12");

date_time_set($date, 13, 20);

echo date_format($date, "d-m-Y H:i:s") . "<br>";


date_time_set($date, 05, 20, 45);
echo date_format($date, "d-m-Y H:i:s") . "<br>";
