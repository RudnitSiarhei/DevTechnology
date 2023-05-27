<?php
    // var_dump($_POST);
    // die;
    require_once "connectOnBD.php";
    $db = new Database();
    $Name = $_POST['name'] ?? "";
    $Position = $_POST['position'] ?? "";
    $Info = $_POST['info'] ?? "";
    $LinkFacebook = $_POST['linkFacebook'] ?? "";
    $LinkTwitter = $_POST['linkTwitter'] ?? "";
    $LinkGit = $_POST['linkGit'] ?? "";
    $LinkEmail = $_POST['linkEmail'] ?? "";
    $NameTable = "employees";

    // echo '<pre>',print_r($_POST,1),'</pre>';
    // echo '<pre>',print_r($_FILES['inputGroupFile01']),'</pre>';
    // die;

    function uploadImage(): string
    {
    $path = $_FILES['inputGroupFile01']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES['inputGroupFile01']['tmp_name'], '/img/uploads/' . uniqid() . '.' .$ext))
    {
        return $path;
    }
    return 'Файл НЕ скопирован';
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $fileImg = uploadImage();
    }
    echo '<pre>',print_r($ext),'</pre>';
    die;
    $query = $db->execute("INSERT INTO $NameTable (Name, Position, Info, LinkFacebook, LinkTwitter, LinkGit, LinkEmail, Img) VALUES ('$Name', '$Position', '$Info', '$LinkFacebook', '$LinkTwitter', '$LinkGit', '$LinkEmail', '$fileImg')");
    
    header("Location: /view/adminPanel.php");
