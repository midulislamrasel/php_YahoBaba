<?php
// crate Session 
//  setup 1 : session_start();
//  setup 2 : $_SESSION[name]= value;
//  setup 3 : $_SESSION[name];


// Delete Sssion;
// setup1 : session_unset();
// setup2 : session_destroy()

session_start();
$_SESSION["favcolor"] = "orange";
echo "Session Variable is set";
