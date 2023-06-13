<?php
function uploadImage($personImage)
{
    $extension = pathinfo($personImage['name'], PATHINFO_EXTENSION);
    $fileName = uniqid().".".$extension;
    move_uploaded_file($personImage['tmp_name'], "../img/featuredWorks/".$fileName);
    return $fileName;
}