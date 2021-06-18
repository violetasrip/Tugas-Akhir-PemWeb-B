<?php

class User_model {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllUser(){
        $this->db->query('SELECT * FROM user');
        return $this->db->resultSet();
    }

    public function getUser($email){
        $this->db->query('SELECT password FROM user WHERE email=:email');
        $this->db->bind('email',$email);
        return $this->db->single();
        }
    }
