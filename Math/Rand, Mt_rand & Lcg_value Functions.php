<?php
// rand(min, max);

// Mersenne Twister algorithm
// 4 times faster than rand () funcstio
// mt_rand(min, max)

// lcg_value()
// show 0 - 1

echo rand(0, 6) . "<br>";


echo mt_rand(2, 20) . "<br>";


echo lcg_value() . "<br>";
