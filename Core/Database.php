<?php 

    class Database{
        protected $dao;
        public function __construct()
        {
            try{
             $this->dao = new PDO("mysql:host=localhost:3306;dbname=daophp","raphael","none");
             $this->dao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                echo $e->getMessage();
            }
            
        }
    }