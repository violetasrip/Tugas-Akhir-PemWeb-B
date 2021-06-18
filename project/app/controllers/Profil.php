<?php

class Profil extends Controller{

    public function index(){
        if(isset($_SESSION['session_email'])){
            $data['user'] = $this->model('User_model')->getUser($_SESSION['session_email']);
            $this->view('profil/index', $data);
        }
    }
}