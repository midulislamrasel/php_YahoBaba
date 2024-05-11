 <!-- 
array_replace used indx or Associativ array
array_replace_recursive used Multidemensional Associative array -->

 <?php

    $fruit = ['orange', 'Banana', 'apple', 'graoes'];
    $veggie = ['carrot', 'pea'];
    $newarray = array_replace($fruit, $veggie);

    echo "<pre>";
    print_r($newarray);
    echo "<pre>";




    $x = ['orange', 'Banana', 'apple', 'graoes'];
    $y = ['a' => 'carrot', 'b' => 'pea'];
    $z = array_replace($x, $y);

    echo "<pre>";
    print_r($z);
    echo "<pre>";


    $x = ['orange', 'Banana', 'apple', 'graoes'];
    $y = [1 => 'carrot', 3 => 'pea'];
    $z = array_replace($x, $y);

    echo "<pre>";
    print_r($z);
    echo "<pre>";
