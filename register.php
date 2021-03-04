<?php

    require "classes/User.model.php";
    require "classes/service.php";
    require "classes/connection.php";

    $user = new User();
    $user->__set('name', $_POST['name']);
    $user->__set('email', $_POST['email']);
    $user->__set('password', $_POST['password']);

    $connection = new Connection();

    $service = new Service($connection, $user);
    $service->insert();

    header('Location: login.php?register=1');
?>