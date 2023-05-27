<?php
    require_once "$pathDB";
    require_once "$pathQuery";
    $db = new Database();    
    $infoUsers = showAllPersons($db);
    foreach ($infoUsers as $infoUser)
    {
        $id = $infoUser['id'];
        $name = $infoUser['Name'];
        $position = $infoUser['Position'];
        $description = $infoUser['Info'];
        $facebook = $infoUser['LinkFacebook'];
        $mail = $infoUser['LinkEmail'];
        $twitter = $infoUser['LinkTwitter'];
        $dribbble = $infoUser['LinkGit'];
        require "$personTemplate";
    }

    
?>