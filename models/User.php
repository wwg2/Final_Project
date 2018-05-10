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
//Setters
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }
    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }
    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }
    public function setBirthday($birthday) {
        $this->birthday = $birthday;
        return $this;
    }
    public function setGender($gender) {
        $this->gender = $gender;
        return $this;
    }
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }
    public function register() {
        $db = new Database();
        $query = "INSERT INTO accounts
                    (email, fname, lname, phone, birthday, gender, password)
                    VALUES
                    ('$this->email', '$this->firstName',
                    '$this->lastName', '$this->phone',
                    '$this->birthday', '$this->gender',
                    '$this->password')";
        $db->query($query);
        return  ['success' => true, 'msg', 'You have successfully been registered'];
    }
    public static function getUserByUserId($id) {
        $db = new Database();
        $user = $db->query("SELECT * FROM accounts WHERE id = '$id'");
        try {
            return $user[0];
        } catch(Exception $e) {
            return false;
        }
    }
    public static function getUserByEmail($email) {
        $db = new Database();
        $query = "SELECT * FROM accounts WHERE email = '$email'";
        $user = $db->query($query);
        try {
            return $user[0];
        } catch(Exception $e)    {
            return false;
        }
    }
    
 public function setSession() {
        $user = $this->getUserByEmail($this->email);
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $this->email;
        $_SESSION['firstName'] = $this->firstName;
        $_SESSION['lastName'] = $this->lastName;
        $_SESSION['phone'] = $this->phone;
        $_SESSION['birthday'] = $this->birthday;
        $_SESSION['gender'] = $this->gender;
        return;
    }
    public static function login($email, $password) {
        $db = new Database();
        $query = "SELECT * FROM accounts
                    WHERE email = '$email'
                    AND binary password='$password'";
                    
        $rows = $db->query($query);
        if(count($rows) > 0) {
            return $rows[0];
        } else {
            return false;
        }
    }
}


?>
