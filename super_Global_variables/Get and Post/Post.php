<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <form action="" method="post">
        Name : <input name="name" type="text"> </br>
        age : <input name="age" type="text"> </br>
        <input name="save" type="submit">
    </form>
    <?php
    if (isset($_POST['save'])) {
        echo $_POST['name'];
        echo $_POST['age'];
    }
    ?>
</body>

</html>