<?php
class User {
    private $id;
    private $username;
    private $password;
    private $gender;
    private $email;
    private $avatar;
    private $status;
    private $age;
    private $firstname;
    private $lastname;
    
    public function __construct(array $userData) {
        if (isset($userData['id'])) {
            $this->id = $userData['id'];
        }
        if (isset($userData['username'])) {
            $this->username = $userData['username'];
        }
        if (isset($userData['password'])) {
            $this->password = $userData['password'];
        }
        if (isset($userData['gender'])) {
            $this->gender = $userData['gender'];
        }
        if (isset($userData['email'])) {
            $this->email = $userData['email'];
        }
        if (isset($userData['avatar'])) {
            $this->avatar = $userData['avatar'];
        }
        if (isset($userData['status'])) {
            $this->status = $userData['status'];
        }
        if (isset($userData['age'])) {
            $this->age = $userData['age'];
        }
        if (isset($userData['firstname'])) {
            $this->firstname = $userData['firstname'];
        }
        if (isset($userData['lastname'])) {
            $this->lastname = $userData['lastname'];
        }
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getUsername() {
        return $this->username;
    }
    
    public function getPassword() {
        return $this->password;
    }
    
    public function getGender() {
        return $this->gender;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function getAvatar() {
        return $this->avatar;
    }
    
    public function getStatus() {
        return $this->status;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function getFirstname() {
        return $this->firstname;
    }
    
    public function getLastname() {
        return $this->lastname;
    }
    
    public function setUsername(string $username) {
        $this->username = $username;
    }
    
    public function setPassword(string $password) {
        $this->password = $password;
    }

    public function setGender(string $gender) {
        $this->gender = $gender;
    }
    
    public function setEmail(string $email) {
        $this->email = $email;
    }
    
    public function setAvatar(string $avatar) {
        $this->avatar = $avatar;
    }
    
    public function setStatus(int $status) {
        $this->status = $status;
    }
    
    public function setAge(int $age) {
        $this->age = $age;
    }
    
    public function setFirstname(string $firstname) {
        $this->firstname = $firstname;
    }
    
    public function setLastname(string $lastname) {
        $this->lastname = $lastname;
    }
}
