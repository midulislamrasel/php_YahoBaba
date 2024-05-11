<?php
$emp = [
    [1, "Manik", "Manager", "15000"],
    [2, "Sumaiya", "salesman", "15000"],
    [3, "Sakil", "computer Operator", "15000"],
    [4, "Mim", "Driver", "15000"],
];


echo "<table border='2px'>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <td>Designation</td>
        <td>Salary</td>
    </tr>";

foreach ($emp as list($id, $name, $designation, $salary)) {
    echo "<tr>  
    <td>$id</td>
    <td>$name</td>
    <td> $designation </td>
    <td> $salary </td>
    </tr> </br>";
}
echo "<table>";
