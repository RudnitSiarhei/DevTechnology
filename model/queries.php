<?php
function addPersonQuery($newPerson, $connection)
{
    return $query = $connection->execute("INSERT INTO employees (Name, Position, Info, LinkFacebook,
    	                                LinkTwitter, LinkGit, LinkEmail, Img) 
                                        VALUES ('$newPerson->name', '$newPerson->position',
                                        '$newPerson->info','$newPerson->linkFacebook',
                                        '$newPerson->linkTwitter','$newPerson->linkGit',
                                        '$newPerson->linkEmail','$newPerson->personImage')");
}

function showAllPersons($connection)
{
    return $query = $connection->query("SELECT * FROM `employees`");
}

function getInfoPersonQuery($id, $connection)
{
    return $query = $connection->query("SELECT * FROM `employees` WHERE id = $id");
}

function addNewInfo($id, $connection, $name, $position, $description, $facebook, $twitter, $dribble, $mail)
{
    return $query = $connection->query("UPDATE `employees` SET `Name`='$name',`Position`='$position',
                                       `Info`='$description',`LinkFacebook`='$facebook',
                                       `LinkTwitter`='$twitter',`LinkGit`='$dribble', `LinkEmail`='$mail' 
                                       WHERE id = $id");
}

function deletePerson($id, $connection)
{
    return $query = $connection->query("DELETE FROM `employees` WHERE id = $id");
}

function deleteImgFromDirectory($id, $connection)
{
    return $query = $connection->query("SELECT `Img` FROM `employees` WHERE id = $id");
}

function showAdminPassword($connection)
{
    return $query = $connection->query("SELECT * FROM `adminPassword`");
}

function addImage($fileName, $connection)
{
    return $query = $connection->execute("INSERT INTO Image (Name) VALUES ('$fileName')");
}

function showAllImage($connection)
{
    return $query = $connection->query("SELECT * FROM `Image`");
}

function deleteImageOnFeaturedWorks($id, $connection)
{
    return $query = $connection->query("SELECT `Name` FROM `Image` WHERE id = $id");
}

function deleteInfoImg($id, $connection)
{
    return $query = $connection->query("DELETE FROM `Image` WHERE id = $id");
}