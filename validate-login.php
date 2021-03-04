<?php

    session_start();

    require "classes/User.model.php";
    require "classes/service.php";
    require "classes/connection.php";

    $user_is_authenticated = false;


    $user = new User();
    $user->__set('email', $_POST['email']);
    $user->__set('password', $_POST['password']);

    $connection = new Connection();

    $service = new Service($connection, $user);
    $service->read($user);

    if($service->read($user)->email == $user->email && $service->read($user)->password == $user->password){
        $user_is_authenticated = true;
    }

    if($user_is_authenticated){
        $_SESSION['authenticated'] = 'YES';
        header('Location: home.php');
    }else{
        $_SESSION['authenticated'] = 'NO';
        header('Location: login.php?login=error');
    }


?>