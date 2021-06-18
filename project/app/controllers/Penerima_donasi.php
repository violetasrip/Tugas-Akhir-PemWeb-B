<?php

class Penerima_donasi extends Controller{

    public function index(){
        $data['penerima_donasi'] = $this->model('Penerima_donasi_model')->getAllPenerima_donasi();
        $this->view('penerima_donasi/index', $data);
    }

    public function detail($id){
        $data['penerima_donasi'] = $this->model('Penerima_donasi_model')->getPenerima_donasi_id($id);
        $this->view('penerima_donasi/detail', $data);
    }
}