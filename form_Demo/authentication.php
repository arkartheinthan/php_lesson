<?php 

    require "function.php";
    session_start();
    if(isset($_POST['register']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];

        if($name != "" && $email != "" && $phone != "" && $password != "" && $c_password != "")
        {
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $c_password_hash = password_hash($c_password, PASSWORD_BCRYPT);

            if(password_verify($password, $password_hash) == password_verify($c_password, $c_password_hash))
            {
                $status = strongPassword($password);
                if($status)
                {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    header('Location: http://localhost:8000/');
                    exit;
                }else {
                    echo "Please Try Again. Your Password is Week!";
                }
            }
            else{
                echo "Password Don't Match Confirm-password!";
            }
        } else {
            $_SESSION['error'] = "Please Fill Form Field!";
            header('Location: http://localhost:8000/');
            exit;
        }
    }


    // Password = Admin2020!@#

    // Login

    if(isset($_POST['login']))
    {
        $user_email = $_POST['email'];
        $user_password = $_POST['password'];

        if($user_email != "" && $user_password != "" )
        {
            if($user_email == $_SESSION['email'] && $user_password == $_SESSION['password'])
            {
                header('Location:http://localhost:8000/view.php');
                exit;
            } else {
                echo "Login Fail";
            }
        }
    }