<?php

class Donasi_saya extends Controller{

    public function index(){
        $this->view('Donasi_saya/index');
    }

    // public function add_donasi($id){
    //     if($this->model('User_model')->getPassUserId($id) == $_POST['password']){
    //         if($this->model('Donasi_model')->add_donasi($_POST) > 0){
    //             $this->model('Penerima_donasi_model')->updateStatusId($id)
    //             header('Location: ' . BASEURL . '/Donasi_saya');
    //             exit;
    //         }
    //     }
    //     echo "<script>alert('Password yang anda masukkan tidak sesuai!');</script>";
    //     header('Location: ' . BASEURL . '/Form_donasi/index'.$id);
    //     exit;
    // }
}