<!-- //view page source  and index page -->

<?php

$str = "A 'Quote' is <b> Bold </b>";
echo $str . "<br><br>";
echo htmlentities($str);

$str = '<a href="https://www.geeksforgeeks.org">GeeksforGeeks</a>';

// It will convert htmlentities and print them
// echo $str;
echo htmlentities($str);


//Singel code convars
echo htmlentities($str, ENT_QUOTES);


//Spsale caracter convarts
echo htmlentities($str, ENT_NOQUOTES);


//same work in htmlentities
echo htmlspecialchars($str, ENT_QUOTES);


//htmlentites code decode convarts
echo html_entity_decode($str);
