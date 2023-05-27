<?php
    require_once '../model/connectOnBD.php';
    $db = new Database();
    $id = $_POST['editSubmit'];
    require_once '../model/queries.php';
    $infoPerson = getInfoPersonQuery($id, $db);
    foreach ($infoPerson as $infoUser)
    {
        $id = $infoUser['id'];
        $name = $infoUser['Name'];
        $position = $infoUser['Position'];
        $description = $infoUser['Info'];
        $facebook = $infoUser['LinkFacebook'];
        $mail = $infoUser['LinkEmail'];
        $twitter = $infoUser['LinkTwitter'];
        $dribbble = $infoUser['LinkGit'];
    }

    require_once '../view/forms/editPersonForm.php';

?>
