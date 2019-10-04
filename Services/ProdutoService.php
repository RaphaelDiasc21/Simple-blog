<?php

    class ProdutoService{
        public function insertProduto($id,$nome){
                $produtoDAO = new ProdutoDAO();
                return $produtoDAO->insert($id,$nome);
        }

        public function getProduto($nome){
            $produtoDAO = new ProdutoDAO();
            return $produtoDAO->getProduto($nome);
        }
    }