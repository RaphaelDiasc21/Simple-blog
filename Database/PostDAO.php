<?php

    class PostDAO extends Database
    {
        public function insertPost($titulo,$corpo,$id_usuario){
            $stmt = $this->dao->prepare("INSERT INTO Posts(titulo,corpo,id_usuario)VALUES(:titulo,:corpo,:id_usuario)");
            $stmt->execute(array(':titulo'=>$titulo, ':corpo'=>$corpo, ':id_usuario'=>$id_usuario));
            return $stmt->rowCount();
        }
        
        public function getPosts($id_usuario){
            $stmt = $this->dao->prepare("SELECT p.titulo, p.corpo FROM Posts as p INNER JOIN Usuario as u ON p.id_usuario = u.id WHERE p.id_usuario = :id_usuario");
            $stmt->execute(array(':id_usuario'=>$id_usuario));
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }  
    }