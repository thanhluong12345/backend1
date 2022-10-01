<?php

class User {
    public $username;
    public $password;
    public $firstName;
    public $lastName;

    public function __construct( $username, $password, $firstName, $lastName ) {
        $this->username = $username;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName() {
        echo $this->firstName." ".$this->lastName;
    }

    public function getUsername() {
        return $this->username;
    }

    public function login( $username, $password_hash ) {
        if( $username == $this->username && password_verify($this->password, $password_hash) ) {
            return true;
        }
        return false;
    }
}

class Student {
    public $gpa;
    public function __construct( $gpa ) {
        $this->gpa = $gpa;
        parent::__construct();
    }

    public function rank() {
        if( $this->gpa < 5 ) {
            return "yeu";
        }elseif ( $this->gpa >=5 && $this->gpa < 7 ) {
            return "trung binh";
        }elseif( $this->gpa >= 7 && $this->gpa < 8 ) {
            return "kha";
        }else {
            return "gioi";
        }
    }
}

