<?php

// time(format)

//    Hour         -        Minutes        -   Seconds         -    Meridiem 
//    h-(01 to 12)          i(00 to 59)       s-(00 to 59)          a-(am or pm)
//    H-(00 to 23)                                                  A-(AM or PM)
//    g-(1 to 12 )                    
//    G-(0 to 23)                                


echo "Hour is" . date("h") . "<br>";
echo "Minutes is " . date("i") . "<br>";
echo "Seconds is " . date("s") . "<br>";
echo "Meridiem is " . date("a") . "<br>";
echo "Time is " . date("h:i:s:a") . "<br>";
echo "Time is " . date("d-m-Y h:i:s:a e") . "<br>";


date_default_timezone_set("Asia/Dhaka");
echo "Time is " . date("d-m-Y h:i:s:a e") . "<br>";
