<?php

    //use Core\Controller;


class HomeController{

    private $produto = [];
    public function index(){
        $LoginController = new LoginController();
        $is_auth = $LoginController->is_auth();

        if($is_auth){
            $nomeUsuario = $_SESSION["nome"];
            $PostService = new PostsService();
            $posts = $PostService->getPosts($_SESSION["id"]);

            Flight::render('Home.php',array('posts'=>$posts, 'usuario'=>$nomeUsuario));
        }else{
            Flight::redirect("/login");
        }
        
    }

    public function getProduto(){
        $nome = $_POST["nome"];
        $produtoService = new ProdutoService();
        $produtos = $produtoService->getProduto($nome);

        Flight::render('Home.php',array('produtos'=>$produtos));
    }

    public function insertPost(){
        session_start();
        $titulo = $_POST["titulo"];
        $corpo = $_POST["corpo"];
        $id_usuario = $_SESSION["id"];

        $produtoService = new PostsService();
        $produtoService->insertPost($titulo,$corpo,$id_usuario);
    }
}