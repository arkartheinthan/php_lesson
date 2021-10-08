<?php 
    echo "Calculate the area". "\n";
    echo "Enter Your Shape = "."\n";
    $shape = readline("Circle(c), Reactangle(r), Triangle(t) = ");

    switch($shape){
        case "c" :
            echo areaOfCircle();
            break;
        case "r" :
            echo areaOfReactangle();
            break;
        case "t" :
            echo areaOfTriangle();
            break;
    }

    function areaOfCircle()
    {
        $pi = 3.12459;
        $radius = readline("Enter your radius : ");
        $area_c = $pi  * pow($radius,2);
        echo "Circle area is ". round($area_c,2);
    }

    function areaOfReactangle()
    {
        $w = readline("Enter your width : "."\n");
        $h = readline("Enter your height : "."\n");
        $area_r = $w * $h;
        echo "Ractangle area is ". round($area_r,2);
    }

    function areaOfTriangle()
    {
        $h = readline("Enter your height : "."\n");
        $b = readline("Enter your base : "."\n");
        $area_t = ($h * $b)/2;
        echo "Triangle area is ".round($area_t,2);
    }