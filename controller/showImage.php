<?php  
    require '../model/connectOnBD.php';
    $db = new Database();
    require_once '../model/queries.php';
    $infoImages = showAllImage($db);
    foreach ($infoImages as $infoImage)
    {
        $id = $infoImage['id'];
        $name = $infoImage['Name'];
        require $imageTemplate;
    }
?>