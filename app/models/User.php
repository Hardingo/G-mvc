<?php

class User {

    private $db;

    public function __construct(){
        $this->db = new Database();
    }


    public function check($email){
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind($email);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function get($email){
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind($email);
        return $this->db->singleResult();
    }


    public function add($first_name, $last_name, $email, $password){
        $this->db->query("INSERT INTO users (first_name, last_name, email, password) 
                            VALUES (:first_name, :last_name, :email, :password)");
        $pwd = password_hash($password, PASSWORD_DEFAULT);
        $this->db->bind(':first_name', $first_name, 'str');
        $this->db->bind(':last_name', $last_name, 'str');
        $this->db->bind(':email', $email, "str");
        $this->db->bind(':password', $pwd, 'str');
        return $this->db->execute();
    }

}