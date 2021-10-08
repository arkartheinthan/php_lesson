<?php

    // function dd($data){
    //     echo "<pre>";
    //     die(var_dump($data));
    // }

    // function orderId($prefix){
    //     return $prefix . "-" . mt_rand(0, 2000);
    // }

    // <?php
    // declare(strict_types=1);
    // $say = function ($name) // Anonrymous Function
    // {
    //     echo $name . "\n";
    // };
    // $say("MK Coder Myanmar");

    // $age = 25;
    // $profile = function ($name) use ($age) // Closure Function
    // {
    //     echo "My name is {$name} and age is {$age}." . "\n";
    // };
    // $profile("Min Khant");

    // // Type hiting
    // $greeting = function (string $data)
    // {
    //     return $data;
    // };
    // echo $greeting(true);

//    $price = 50000;
//    echo number_format($price,2); round(..);

function moneyFormat($price)
{
    return number_format($price, 2) . ' ' . "MMK" . "\n"; //number_format
}

echo moneyFormat(100000);

$num = "                                      Hello";
echo trim($num); // space trim
