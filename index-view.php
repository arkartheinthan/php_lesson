<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>PHP Basic</title>
</head>
<body>

    <!-- Associated Array -->
    <ul>
        <?php foreach($data1 as $key=>$item) : ?>
            <li>
                <?= $key."-".$item."<br>"; ?>
            </li>
        <?php endforeach ?>
    </ul>

    <form action="" method="post" class="container mx-auto w-full flex justify-center mt-5">
        <input type="text" name="prefix" placeholder="Prefix" class="px-2 border bg-gray-50 shadow-lg focus:outline-none">
        <button type="submit" name="create" class="bg-green-300 px-3 py-1 shadow-lg text-white">Create Order ID</button>
    </form>
    <div class="container mx-auto w-full flex justify-center mt-5">
        <p>Order ID : <?= $orderId ?></p>
    </div>
    
</body>
</html>