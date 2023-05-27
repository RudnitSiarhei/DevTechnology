<?php
    class Authorization {
        private $login;
        private $password;

        public function __construct($loginUser, $passwordUser) {
            $this->login = $loginUser;
            $this->password = $passwordUser;
        }

        public function checkAuth($loginUser, $passwordUser) {
            
            if ($this->login === $loginUser && $this->password === $passwordUser)
            {
                header("Location: ../view/adminPanel.php");
            }
            else
            {
                $messageWarning = 'WARNING! Invalid login or password entered!';
                require_once '../view/forms/authForm.php';
            }
        }
    }
?>