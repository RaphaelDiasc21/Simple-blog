<?php

    class LoginService
    {
        public function logUser(){
            $UsuarioDAO = new UsuarioDAO();
            $usuario = $UsuarioDAO->getUsuario($_POST["email"], $_POST["password"]);
            
            if($usuario){
                session_start();

                $_SESSION["logged"] = true;
                $_SESSION["nome"] = $usuario["nome"];
                $_SESSION["id"] = $usuario["id"];
                return true;
            }else{
                return false;
            }
        }
    }