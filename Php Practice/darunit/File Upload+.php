<?php

    if(isset($_POST['submit'])){
        $img_name = $_FILES['upload_img']['name'];
        $img_size = $_FILES['upload_img']['size'];
        $tmp_name = $_FILES['upload_img']['tmp_name'];
        $img_type = $_FILES['upload_img']['type'];
        $img_error = $_FILES['upload_img']['error'];
        move_uploaded_file($tmp_name, "Upload/".$img_name);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Image</title>
</head>
<body>
    <img src="Upload/<?php if(isset($img_name)){echo $img_name;}?>" style="height: 90vh; width: auto;">
</body>
</html>
