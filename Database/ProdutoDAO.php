<?php

class ProdutoDAO{
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

    public function insert($id,$nome){
        try{
         $stmt = $this->dao->prepare("INSERT INTO produto(id,nome)VALUES(?,?)");
         $stmt->bindValue(1,$id);
         $stmt->bindValue(2,$nome);
         $stmt->execute();

         return $stmt->rowCount();
        }catch(Exception $e){
             echo $e->getMessage();
        }

    }

    public function listProdutos(){
        
        try{
            $stmt = $this->dao->prepare("SELECT * FROM produto;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            
            return $result;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function getProduto($nome){
        
     try{
         $stmt = $this->dao->prepare("SELECT * FROM produto where nome = ?;");
         $stmt->bindParam(1, $nome);
         $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_OBJ);
         
         return $result;
     }catch(Exception $e){
         echo $e->getMessage();
     }
 }
}
