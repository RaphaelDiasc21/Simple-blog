<?php

    class LoginController
    {
        public function is_auth(){
            session_start();

            if(!isset($_SESSION["logged"])){
                return false;
            }else{
                return true;
            }
        }

        public function index(){
            Flight::render("Login.php",array('loginFail' => false));
        }

        

        public function getUser(){
            $LoginService = new LoginService();
            $result = $LoginService->logUser();

            if($result){
                Flight::redirect("/");
            }else{
                Flight::render("Login.php", array('loginFail' => true));
            }
        }

        public function logoutUser(){
            session_start();

            session_destroy();

            Flight::redirect("/login");
        }
    }