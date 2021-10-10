<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Password Hashing</title>
</head>
<body>

    <?php
        $data = "coder@#$54593378378273ujddidkjdmkdsjslam.d,mdlkdsjdokdl,djdkdl";
        $hashing = password_hash($data, PASSWORD_BCRYPT);
        echo $hashing . "<br>";
        $result = password_verify($data ,$hashing);
        var_dump($result);
    ?>
</body>
</html>