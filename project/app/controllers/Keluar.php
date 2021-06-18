<?php

class Keluar extends Controller{

    public function index(){

        if(!isset($_COOKIE['cookie_email'])){
            $_COOKIE['cookie_email'] = null;
            $_COOKIE['cookie_password'] = null;
        }
    
        if(!isset($_SESSION['session_email'])){
            header('Location: ' . BASEURL . '/Masuk');
            exit;
        }
    
        if(isset($_POST['logout'])){
            $_SESSION['session_email'] = "";
            $_SESSION['session_password'] = "";
            session_destroy();

            $cookie_name = "cookie_email";
            $cookie_value = "";
            $time = time() - (60 * 60);
            setcookie($cookie_name,$cookie_value,$time,"/");

            $cookie_name = "cookie_password";
            $cookie_value = "";
            $time = time() - (60 * 60);
            setcookie($cookie_name,$cookie_value,$time,"/");
    
            header('Location: ' . BASEURL . '/Masuk');
            exit;
        }
    }
}