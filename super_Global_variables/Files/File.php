<?php
// $_FILES['image'];
if (isset($_FILES['file'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";


    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_tmp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];

    // echo "$file_name , $file_type, $file_tmp_name, $file_size";

    if (
        move_uploaded_file($file_tmp_name, "uploade_image" . $file_name)
    ) {
        echo "Successfully Uplode";
    } else {
        echo "Could not upload the file.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="Post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" name="save">
    </form>
</body>

</html>