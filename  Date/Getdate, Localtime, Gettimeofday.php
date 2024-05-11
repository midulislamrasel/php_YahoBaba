<?
$oldate = mktime(0, 0, 0, 03, 15, 2020);
$date = getdate($oldate);
echo $date['month'] . " - " . $date['year'];


echo "<pre>";
print_r($date);
echo "</pre>";
