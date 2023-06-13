<?php
    require_once '../model/connectOnBD.php';
    $db = new Database();
    $id = $_POST['deleteSubmit'];
    require_once '../model/queries.php';
    require_once '../model/deleteImageFeaturedWorks.php';
    $pathImg = deleteImageOnFeaturedWorks($id, $db);
    foreach ($pathImg as $pathImage)
    {
        $path = $pathImage['Name'];
    }
    deletePersonImg($path);
    deleteInfoImg($id, $db);
    header("Location: ../view/imgPanel.php");
?>