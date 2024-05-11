<?php
// 15-03-2025 + 39 = 2025-04-23
// date_add(object,interval)
$date = date_create("2025-03-15");
date_add($date, date_interval_create_from_date_string("39 days"));
echo date_format($date, "Y-m-d") . "<br>";



// 15-03-2025 - 39 = 2025-02-04
// date_sub(object,interval)
$date = date_create("2025-03-15");
date_sub($date, date_interval_create_from_date_string("39 days"));
echo date_format($date, "Y-m-d") . "<br>";



// 15-03-2025 + 10 = 2025-03-25
// 15-03-2025 - 39 = 2025-02-04
// date_modify(object,modify)
$date = date_create("2025-03-15");
date_modify($date, "10 day");
echo date_format($date, "Y-m-d");
