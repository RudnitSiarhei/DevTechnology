<?php
    function deletePersonImg($personImage)
    {
        unlink("../img/imagesPerson/".$personImage);
    }
?>