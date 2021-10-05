<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];

    echo "{$name},{$email},{$phone}, {$age}";
    if($name == "" && $email == "" && $phone == "" && $age == "")
    {
        $error = "Please fill your name, email, phone and age..!";
    }
}

require "index-view.php";


