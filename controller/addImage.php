<?php

    require_once '../model/uploadImageOnFeaturedWorks.php';
    $fileName = uploadImage($_FILES['image']);
    require_once '../model/connectOnBD.php';
    require_once '../model/queries.php';
    $db = new Database();
    addImage($fileName, $db);
    header("Location: ../view/imgPanel.php");
    exit();
?>