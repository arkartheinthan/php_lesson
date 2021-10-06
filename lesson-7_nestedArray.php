<?php

require "function.php";

$data2 = [
    ["name" => "Mg Mg", "age" => 30, "address" => "Yangon"],
    ["name" => "Aung Aung", "age" => 30, "address" => "Yangon"],
    ["name" => "Kyaw", "age" => 45, "address" => "Yangon"],
    ["name" => "Wanna", "age" => 25, "address" => "Yangon"],
    ["name" => "Kyaw Sor", "age" => 48, "address" => "Yangon"],
    ["name" => "Kyaw Wanna", "age" => 25, "address" => "Yangon"],
];

echo "<pre>";
// print_r($data2);
print_r($data2[0]);
print_r($data2[1]);
print_r($data2[2]);
print_r($data2[3]);
print_r($data2[4]);
print_r($data2[5]);

print_r($data2[0][1]);
print_r($data2[1][1]);
print_r($data2[2][1]);
print_r($data2[3][1]);
print_r($data2[4][1]);
print_r($data2[5][1]);




require "index-view.php";