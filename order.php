<?php

require "function.php";

if(isset($_POST['create']))
{
    $prefix = $_POST['prefix'];
    if(empty($prefix))
    {
        echo "Plaese Fill prefix Code...!";
    }else {
        $orderId = orderId($prefix);
    }
}

require "index-view.php";