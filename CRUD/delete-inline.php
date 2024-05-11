<?php
require "db.config.php";


$stu_id = $_GET['id'];

// echo $stu_id;

$sql = " DELETE FROM student WHERE sid={$stu_id}";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");


header("Location: http://localhost:84/mysite/php/CRUD/");

mysqli_close($conn);
