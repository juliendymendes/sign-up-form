<?php

    session_start();

    if(!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] != 'YES'){
        header('Location: login.php?login=error2');
    }
?>