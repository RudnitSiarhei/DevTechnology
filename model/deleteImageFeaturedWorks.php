<?php
    function deletePersonImg($personImage)
    {
        unlink("../img/featuredWorks/".$personImage);
    }
?>