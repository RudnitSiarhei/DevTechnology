<?php
    require_once '../model/Person.php';
    require_once '../model/uploadImage.php';
    $fileName = uploadImage($_FILES['image']);

    $newPerson = new Person(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['position']), 
                            htmlspecialchars($_POST['info']), htmlspecialchars($_POST['linkFacebook']), 
                            htmlspecialchars($_POST['linkTwitter']), htmlspecialchars($_POST['linkGit']),
                            htmlspecialchars($_POST['linkEmail']), $fileName);
    require_once '../model/connectOnBD.php';
    require_once '../model/queries.php';
    $db = new Database();
    addPersonQuery($newPerson, $db);
    header("Location: ../view/adminPanel.php");
    exit();