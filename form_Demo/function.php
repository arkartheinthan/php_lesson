<?php
    function strongPassword($password){
        $uppercase = false;
        $lowercase = false;
        $digit = false;
        $special = false;
        
        if(preg_match('/[A-Z]/', $password))
        {
            $uppercase = true;
        }
        if(preg_match('/[a-z]/', $password))
        {
            $lowercase = true;
        }
        if(preg_match('/[0-9]/', $password))
        {
            $digit = true;
        }
        if(preg_match('/[!@#$%^&*]/', $password))
        {
            $special = true;
        }

        if($uppercase && $lowercase && $digit && $special)
        {
            return true;
        }else {
            return false;
        }
    }