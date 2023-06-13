<?php
    require_once '../model/connectOnBD.php';
    $db = new Database();
    $id = $_POST['id'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $description = $_POST['description'];
    $facebook = $_POST['facebook'];
    $mail = $_POST['mail'];
    $twitter = $_POST['twitter'];
    $dribble = $_POST['git'];
    require_once '../model/queries.php';
    $editInfo = addNewInfo($id, $db, $name, $position, $description, $facebook, $twitter, $dribble, $mail);
    header('Location: ../view/adminPanel.php');
?>
