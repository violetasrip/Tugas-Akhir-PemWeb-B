<?php

class Donasi_saya extends Controller{

    public function index(){
        if(isset($_SESSION['session_email'])){
            $data['donasi_saya'] = $this->model('Donasi_model')->getDonasi($_SESSION['session_email']);
            $data['penerima_donasi'] = [];
            foreach($data['donasi_saya'] as $donasi){
                array_push( $data['penerima_donasi'], $this->model('Penerima_donasi_model')->getPenerima_donasi_id($donasi['id_person']) );
            }
            $this->view('Donasi_saya/index', $data);
        }
    }
}