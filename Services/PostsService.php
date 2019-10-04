<?php

    class PostsService
    {
        public function insertPost($titulo,$corpo,$id_usuario){
            $PostDAO = new PostDAO();
            return $PostDAO->insertPost($titulo,$corpo,$id_usuario);
        }

        public function getPosts($id_usuario){
            $PostDAO = new PostDAO();
            return $PostDAO->getPosts($id_usuario);
        }
    }