<?php
    // require_once 'model/connectOnBD.php';
    // require_once 'model/queries.php';
    // $db = new Database();
    $persons = showAllPersons($db);
    foreach ($persons as $person)
    {
        require('view/team.php');
    }
    ?> 