<?php

class Person {

    public $name;
    public $position;
    public $info;
    public $linkFacebook;
    public $linkTwitter;
    public $linkGit;
    public $linkEmail;
    public $personImage;

    public function __construct($name, $position, $info, $linkFacebook, $linkTwitter, $linkGit, 
                                $linkEmail, $personImage) {
        $this->name = $name;
        $this->position = $position;
        $this->info = $info;
        $this->linkFacebook = $linkFacebook;
        $this->linkTwitter = $linkTwitter;
        $this->linkGit = $linkGit;
        $this->linkEmail = $linkEmail;
        $this->personImage = $personImage;
    }
}

