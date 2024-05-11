<?php

echo "Hello Rana";
echo "Hello Rana";
goto abcd;
echo "Hello Rana";
echo "Hello Rana";
abcd:
echo "ho";



//================
for ($a = 1; $a < 10; $a++) {
    if ($a == 3) {
        goto abc;
    }
    echo "$a";
}

echo "HO";
abc:
echo "This is now code";
