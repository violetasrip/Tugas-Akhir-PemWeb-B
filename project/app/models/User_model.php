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
        $this->db->query('SELECT * FROM user WHERE email=:email');
        $this->db->bind('email',$email);
        return $this->db->single();
    }

    public function addUser($data){
        $query = "INSERT INTO user (email, nama_p, alamat_p, telepon, motto, pass) VALUES (:email, :nama_p, :alamat_p, :telepon, :motto, :pass)";
        $this->db->query($query);
        $this->db->bind('nama_p', $data['nama_p']);
        $this->db->bind('alamat_p', $data['alamat']);
        $this->db->bind('telepon', $data['call']);
        $this->db->bind('motto', $data['motto']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pass', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
