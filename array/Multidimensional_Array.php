<?php
$emp = [
    [1, "Midul", "Mirpur", "5000"],
    [2, "Kalidh", "Dhaka", "5000"],
    [3, "Salman", "Meherpur", "5000"],
    [4, "Rasel", "Khulna", "5000"],
];

echo "<pre>";
print_r($emp);
echo "</pre>";

echo $emp[0][2];

echo "</br>" . "</br>";

//for looop
for ($row = 0; $row < 4; $row++) {
    for ($col = 0; $col < 4; $col++) {
        echo $emp[$row][$col] . " ";
    }
    echo "</br>";
}


//table From in foreach



echo "</br>" . "</br>";

//foreach
foreach ($emp as $v1) {
    foreach ($v1 as $v2) {
        echo $v2 . " ";
    }
    echo "</br>";
}


//table From in foreach
echo "<table border='2px' padding ='55px'>";
echo "<tr>
        <th>Id:</th>
        <th>Name:</th>
        <th>Address:</th>
        <th>Salary:</th>
    <tr>";
foreach ($emp as $v1) {
    echo "<tr>";
    foreach ($v1 as $v2) {
        echo "<td>" . $v2 . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
