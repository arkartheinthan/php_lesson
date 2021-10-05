<?php

/**
      * 1.My name is ark,age,email,address {$name}
        2.$_GET['email] => html
        3.Primitive Data Types -& string , integer,float,null
        var_dump()
      */

// Lesson-1
$name = "Arkar Thein Than";
$age = 27;
$email = "arkartheinthan7@gmail.com";
$address = "No.1/A, ABC street, Yangon.";
echo "My name is {$name} and age is {$age}. My Email is {$email} and address is {$address}.";

// lesson-2
$email2 = "arkar@gmail.com";
echo htmlspecialchars($_GET['email2']);

// lesson-3
// Primitive Data Type
// String, Integer, Boolean, Float/Double, Null, undefined

$num1 = "Hello";
$num2 = 22;
$num3 = true;
$num4 = 2.25;
$num5;
var_dump($num1, $num2, $num3, $num4,$num5);
?>