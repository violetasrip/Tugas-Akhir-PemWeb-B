<?php

class Penerima_donasi_model {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllPenerima_donasi(){
        $this->db->query('SELECT * FROM daftar_donasi');
        $hasil =  $this->db->resultSet();
        return $hasil;
    }

    public function getPenerima_donasi_id($id){
        $this->db->query('SELECT * FROM daftar_donasi WHERE id_person=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }
    
    public function updateStatusId($id){
        $value = 'Telah Menerima Donasi';
        $query = 'UPDATE daftar_donasi SET status=:value WHERE id_person=:id';
        $this->db->bind('value',$value);
        $this->db->bind('id',$id);
        $this->db->query($query);
    }
}