<?php
// date -> current Data and time
// date(formet,timestamp)

// mktime(hour, minute, second, month, day, year);
// gmmktime(hour, minute, second, month, day, year);
// GMT date (Greenwich Mean Time)

date_default_timezone_set("Asia/Dhaka");
echo "Time is " . date("d-m-Y h:i:s:a") . "<br>";


echo date("d-m-Y h:i:s:a", mktime(0, 0, 0, 10, 15, 2003)) . "<br>";


echo date("d-m-Y h:i:s:a", gmmktime(0, 0, 0, 10, 15, 2003)) . "<br>";
