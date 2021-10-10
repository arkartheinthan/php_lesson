<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Hashing</title>
</head>
<body>

    <form action="" method="POST">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="hash" value="Submit">Submit</button>
    </form>

    <?php 
        if(isset($_POST['hash']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $result = password_verify($password, $password_hash);
            var_dump($result);
            echo $email . "<br>" .$password_hash ;
        }
    ?>
</body>
</html>