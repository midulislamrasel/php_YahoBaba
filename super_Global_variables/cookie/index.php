<?php
// crate cookie
// setcookie(name,value,expire,path,domain,secure,httponly)

$cookie_name = "user";
$cookie_value = "Midul ISlam";

setcookie($cookie_name, $cookie_value, time() + (60), "/");

?>
<html>

<body>
    <?php
    if (isset($_COOKIE[$cookie_name])) {
        echo $_COOKIE[$cookie_name];
    } else {
        echo "Not set Coolie";
    }
    ?>
</body>

</html>