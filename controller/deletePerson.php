<?php
    require_once '../model/connectOnBD.php';
    $db = new Database();
    $id = $_POST['deleteSubmit'];
    require_once '../model/queries.php';
    require_once '../model/deletePersonImage.php';
    $pathImg = deleteImgFromDirectory($id, $db);
    foreach ($pathImg as $pathImage)
    {
        $path = $pathImage['Img'];
    }
    deletePersonImg($path);
    deletePerson($id, $db);
    header("Location: ../view/adminPanel.php");
?>