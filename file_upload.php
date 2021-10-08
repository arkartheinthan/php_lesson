<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
<?php
    if(isset($_POST['upload']))
    {
        $profile = $_POST['profile'];

        $imgName = $_FILES['profile']['name'];
        $tmp_name = $_FILES['profile']['tmp_name'];
        $targetFIle = './img/'. $imgName;
        try {
            move_uploaded_file($tmp_name, $targetFIle);
            $success = "Upload Successfully!";
        } catch (\Throwable $e) {
            echo "Failed File Upload";
        }
    }
?>



    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="profile">
        <input type="submit" value="upload" name="upload">
    </form>
    <p style="color:green;">
        <?= $success ?>
    </p>
</body>
</html>