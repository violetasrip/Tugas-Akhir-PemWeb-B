<?php

class Form_donasi extends Controller{

    public function index($id){
        $this->view('Form_donasi/index', $id);
    }

    public function add_donasi($id){
        if($this->model('User_model')->getPassUserId($email) == $_POST['password']){
            if($this->model('Donasi_model')->add_donasi($_POST) > 0){
                $this->model('Penerima_donasi_model')->updateStatusId($id)
                header('Location: ' . BASEURL . '/Donasi_saya');
                exit;
            }
        }
        echo "<script>alert('Password yang anda masukkan tidak sesuai!');</script>";
        header('Location: ' . BASEURL . '/Form_donasi/index'.$id);
        exit;
    }
}