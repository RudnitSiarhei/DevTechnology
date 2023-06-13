<?php
    require_once 'model/connectOnBD.php';
    require_once 'model/queries.php';
    $db = new Database();
    $images = showAllImage($db);
    foreach ($images as $image)
    {
        require('view/template/worksTemplate.php');
    }
    ?> 