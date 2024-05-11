<?php
// MD5=> Message-Digest Algorithm
// md5(string,raw)
// string = 08ba8d5a8sfe5fa8ad......... 
// raw = 1. True  = Raw 16 character binary format
//       2. FALSE = Default 32. character hex number


//Us Secure Hash Algorithm 1
// sha1(string,raw)
// raw = 1. True  = Raw 20 character binary format
//       2. FALSE = Default 40. character hex number


$str = "Hello";
echo "The String : " . $str . " <br><br>";

echo "md5 Binary:" . md5($str, true) . "<br>";
// md5 Binary:��S�a��'���x�


echo "md5 HEX:" . md5($str, false) . "<br>";
// md5 HEX:8b1a9953c4611296a827abf8c47804d7


echo " sha1 Binary" . sha1($str, true) . "<br>";
// sha1 Binary����{���p�Z]x^��Ы�


echo " sha1 HEX" . sha1($str, false) . "<br>";
// sha1 HEXf7ff9e8b7bb2e09b70935a5d785e0cc5d9d0abf0


$str = "Hello";
if (md5($str) == "8b1a9953c4611296a827abf8c47804d7") {
    echo "Password Mathched";
} else {
    echo "Passwrod Not Matched";
}
