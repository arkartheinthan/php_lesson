<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
</head>
<body>
    
    <form action="" method="post">
        <label for="">User Name</label>
        <input type="text" name="name"><br>
        <label for="">Email</label>
        <input type="email" name="email"><br>
        <label for="">Phone</label>
        <input type="text" name="phone"><br>
        <label for="">Age</label>
        <input type="text" name="age"><br>
        <button type="submit" name="submit">Send</button>
    </form>
    
    <p style="color:red;">
        <?= $error ?>
    </p>


    <!-- foreach looping -->
    <ul>
        <?php foreach($items as $item) : ?>
            <li>
                <?= $item ?>
            </li>
        <?php endforeach ?>
    </ul>

</body>
</html>