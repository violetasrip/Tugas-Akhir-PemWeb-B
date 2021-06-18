<?php

class Form_donasi extends Controller{

    public function index($id){
        $data['id'] = $id;
        $this->view('Form_donasi/index', $data);
    }

    public function add_donasi(){
        if(isset($_SESSION['session_email'])){
            $data['user'] = $this->model('User_model')->getUser($_SESSION['session_email']);
            if($data['user']['pass'] == $_POST['password']){
                if($this->model('Donasi_model')->add_donasi($_POST) > 0){
                    $this->model('Penerima_donasi_model')->updateStatusId($_POST['id']);
                    header('Location: ' . BASEURL . '/Penerima_donasi');
                    exit;
                }
            }
        }
    }
}