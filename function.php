<?php

    function dd($data){
        echo "<pre>";
        die(var_dump($data));
    }

    function orderId($prefix){
        return $prefix . "-" . mt_rand(0, 2000);
    }
