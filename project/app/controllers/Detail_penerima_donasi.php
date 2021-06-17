<?php

class Detail_penerima_donasi extends Controller{

    public function index(){
        $data['nama'] = $this->model('User_model')->getUser();
    }
}