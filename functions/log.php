<?php

    session_start();
    // $_SESSION['error-login'] = 0;
    require './connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = $connect->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

    $user = $check_user->fetch(PDO::FETCH_ASSOC);

    if ($user>0){
        if($user['role'] == 1){
            $_SESSION['admin'] = [
                "id" => $user['id'],
                "full_name" => $user['full_name'],
                "login" => $user['login'],
                "email" => $user['email'],
                "password" => $user['password'],
                "role" => $user['role']
            ];
            header("Location: ../pages/admin/admin.php");
            // $_SESSION['error-login'] = 0;
        }
        else{
            $_SESSION['user'] = [
                "id" => $user['id'],
                "full_name" => $user['full_name'],
                "login" => $user['login'],
                "email" => $user['email'],
                "password" => $user['password'],
                "role" => $user['role']
            ];
            header("Location: ../pages/profile.php");
            // $_SESSION['error-login'] = 0;
        }        
    } 
    else{
        $_SESSION['message'] = 'Невереный логин или пароль!';
        
        header("Location: ../pages/auth.html");
        // $_SESSION['error-login'] = 1;
    }
?>