<?php
$marks = [
    "Krishana" => [
        "Physice" => "58",
        "Math" => "98",
        "Chemistry" => "68",
    ],
    "Ranna" => [
        "Physice" => "48",
        "Math" => "58",
        "Chemistry" => "48",
    ],
    "Korim" => [
        "Physice" => "68",
        "Math" => "88",
        "Chemistry" => "78",
    ],
];

echo "<pre>";
print_r($marks);
echo "<pre>";

echo "<table border='2px'>
        <th> Name</th>
        <th> Physice</th>
        <th> math</th>
        <th> Chemistry</th>
    ";
foreach ($marks as $key => $v1) {
    echo "<tr>
        <td> $key </td>";
    foreach ($v1 as $v2) {
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
