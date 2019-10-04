<?php

require 'vendor/autoload.php';
require_once("config/autoload.php");
require_once("./config/autoload.php");

Flight::route('/',function(){
    $HomeController = new HomeController();
    $HomeController->index();
});

Flight::route('/post-insert',function(){
    $HomeController = new HomeController();
    $HomeController->insertPost();

    Flight::redirect("/");
});

Flight::route('/get-produto',function(){
    $HomeController = new HomeController();
    $HomeController->getProduto();
});

Flight::route('/login',function(){
    $LoginController = new LoginController();
    $LoginController->index();
});

Flight::route('/login-user',function(){
    $LoginController = new LoginController();
    $LoginController->getUser();
});

Flight::route('/logout',function(){
    $LoginController = new LoginController();
    $LoginController->logoutUser();
});

Flight::start();


