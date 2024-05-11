<?php
function test($num)
{
    if ($num < 10) {
        echo $num  . '</br>';
        test($num + 1);
    }
}
test(5);
