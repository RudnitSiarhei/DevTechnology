<?php
    session_start();
    unset($_SESSION['login'], $_SESSION['password']);
    header('location: ../index.php');
    exit();
?>