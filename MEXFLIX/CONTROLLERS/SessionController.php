<?php
class SessionController{
    private $session;
    public function __construct(){
        $this->session = new UsersModel();
    }

    public function login($user,$pass){
        return $this->session->validate_user($user,$pass);
    }

    public function logout(){
        $session_options = array(
            'use_only_cookies' => 1,
            'auto_start' => 1,
            'read_and_close' => true      
    );
        session_start($session_options);
        session_destroy();
        header('Location: ./');

    }

    public function __destruct(){

    }
}