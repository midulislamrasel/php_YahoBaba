<?php

// locatl varibale
$x = 10;
function test()
{
    global $x;
    echo "Variable X inside function : $x" . "</br>";
}
test();
echo "Variable X inside function : $x";
// echo $x;
