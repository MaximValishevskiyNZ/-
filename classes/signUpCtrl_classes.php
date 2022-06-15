<?php

require_once('dbh_classes.php');

class signUpCtrl extends dbh {  
    private $username;
    private $email;
    private $pwd;
    private $pwdConfirm;

    public function __construct($username, $email, $pwd, $pwdConfirm) {
        $this->username = $username;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdConfirm = $pwdConfirm;
    }

    public function isEmpty() {
        foreach ($this as $prop => $val) {
            if (empty($val)) {
                return true;
            }
        }
        return false;
    }
   
    public function usernameValid() {
        if (preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            return false;
        }
        return true;
    }

    public function emailValid() {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    public function pwdMatch() {
        if ($this->pwd === $this->pwdConfirm) {
            return false;
        }
        return true;
    }


    
}

