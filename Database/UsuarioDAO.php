<?php

    class UsuarioDAO
    {
        private $dao;

        public function __construct()
        {
            try{
             $this->dao = new PDO("mysql:host=localhost:3306;dbname=daophp","raphael","none");
             $this->dao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                echo $e->getMessage();
                echo "sal";
            }
            
        }

        public function getUsuario($email,$senha){
            $stmt = $this->dao->prepare("SELECT * FROM Usuario WHERE email = :email AND senha = :senha");
            $stmt->execute(array(':email' => $email, ':senha' => $senha));
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }