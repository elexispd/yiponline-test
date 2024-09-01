<?php 

// classes/User.php
class User {
    public $username;
    public $email;
    public $password;
    public $errors = [];

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    // Validate username
    public function validateUsername() {
        if (empty($this->username) || !preg_match('/^[a-zA-Z0-9]{3,20}$/', $this->username)) {
            $this->errors['username'] = 'Username must be alphanumeric and between 3-20 characters.';
        }
    }

    // Validate email
    public function validateEmail() {
        if (empty($this->email) || !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = 'Invalid email format.';
        }
    }

    // Validate password
    public function validatePassword() {
        if (empty($this->password) || strlen($this->password) < 8 || !preg_match('/[A-Z]/', $this->password) || !preg_match('/[a-z]/', $this->password) || !preg_match('/[0-9]/', $this->password)) {
            $this->errors['password'] = 'Password must be at least 8 characters long, and include at least one uppercase letter, one lowercase letter, and one number.';
        }
    }

    // Validate all fields
    public function validate() {
        $this->validateUsername();
        $this->validateEmail();
        $this->validatePassword();
        return empty($this->errors);
    }
}
