<?php

class Masuk extends Controller{
    private $checkbox = "";
    private $error = False;

    public function index(){
        $this->view('masuk/index');
    }

    public function login(){
        $data = $_POST;
        $email_user  = $data['email'];
        $password   = $data['psw'];

        $data['user'] = $this->model('User_model')->getUser($email_user);

        if(isset($_COOKIE['cookie_email'])){
            $cookie_email = $_COOKIE['cookie_email'];
            $cookie_password = $_COOKIE['cookie_password'];
            $email_user = $cookie_email;
            $psw = $cookie_password;
            if($data['user']['password'] == $cookie_password){
                $_SESSION['session_email'] = $cookie_email;
                $_SESSION['session_password'] = $cookie_password;
            }
        }

        if(isset($_SESSION['session_email'])){
            header('Location: ' . BASEURL . '/Beranda');
            exit;
        }

        if(isset($data['checkbox'])){
            $checkbox   = $data['checkbox'];
        }

        if($data['user']['password'] == $email_user){
            $_SESSION['session_email'] = $email_user;
            $_SESSION['session_password'] = $password;

            if($checkbox == 1){
                $cookie_name = "cookie_email";
                $cookie_value = $email_user;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");

                $cookie_name = "cookie_password";
                $cookie_value = $password;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");
            }
            header('Location: ' . BASEURL . '/Beranda');
            exit;
        }else {
            Flasher::setFlash('Gagal!', 'Password tidak sesuai', 'danger');
            header('Location: ' . BASEURL . '/Masuk');
            exit;
        }
    }
}