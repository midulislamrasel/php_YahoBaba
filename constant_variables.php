<?php
// defain(name,value,case-insensitive)
// can't use $sign with constant variable name
//constant variables are Global variables

// define(nums, 500);
// echo nums;


define("CONSTANT", "Hello world.");
echo CONSTANT; // outputs "Hello world."
// echo Constant; // outputs "Constant" and issues a notice.

define("GREETING", "Hello you.", true);
echo GREETING; // outputs "Hello you."
// echo Greeting; // outputs "Hello you."

// Works as of PHP 7
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // outputs "cat"
