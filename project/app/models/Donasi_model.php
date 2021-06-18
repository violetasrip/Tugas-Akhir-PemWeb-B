<?php

class Donasi_model {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getDonasi($email){
        $this->db->query('SELECT * FROM donasi WHERE email=:email');
        $this->db->bind('email',$email);
        return $this->db->resultSet();
    }

    public function add_donasi($data){
        $query = "INSERT INTO donasi (id_donasi, jenjang, nominal, id_person, email) VALUES ('', :jenjang, :nominal, :id_person, :email)";
        $this->db->query($query);
        // binding
        $this->db->bind('jenjang', $data['jenjang']);
        $this->db->bind('nominal', $data['nominal']);
        $this->db->bind('id_person', $data['id']);
        $this->db->bind('email', $_SESSION['session_email']);

        $this->db->execute();
        
        return $this->db->rowCount();
    }

}