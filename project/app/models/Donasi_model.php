<?php

class Donasi_model {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function add_donasi($data){
        $query = "INSERT INTO donasi VALUES ('', :jenjang, :nominal, :id_person, :email)";
        $this->db->query($query);
        // binding
        $this->db->bind('jenjang', $data['jenjang']);
        $this->db->bind('nominal', $data['nominal']);
        $this->db->bind('id_person', $data[$id]);
        $this->db->bind('id_person', $data['email']);
    }

}