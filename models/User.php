<?php
class User {
    private $id;
    private $email;
    private $firstName;
    private $lastName;
    private $phone;
    private $birthday;
    private $gender;
    private $password;
    //Getters
    public function getId() {
        return $this->id;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getFirstName() {
        return $this->firstName;
    }
    public function getLastName() {
        return $this->lastName;
    }
    public function getPhone() {
        return $this->phone;
    }
    public function getBirthday() {
        return $this->birthday;
    }
    public function getGender() {
        return $this->gender;
    }
    public function getPassword() {
        return $this->password;
    }




?>
