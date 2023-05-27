<?php
    require_once '../model/connectOnBD.php';
    $db = new Database();
    require_once '../model/queries.php';
    $adminInfo = showAdminPassword($db);
    require_once '../model/auth.php';
    $auth = new Authorization($_POST['login'], $_POST['password']);   
    $auth->checkAuth($adminInfo[0]['name'], $adminInfo[0]['password']);
?>