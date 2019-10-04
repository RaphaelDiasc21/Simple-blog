<?php

   

    spl_autoload_register(function($nomeClass){

        if(file_exists('./Controllers/'.$nomeClass.'.php')){
            require_once('./Controllers/'.$nomeClass.'.php');
        }

    });

    
    spl_autoload_register(function($nomeClass){

        if(file_exists('./Core/'.$nomeClass.'.php')){
            require_once('./Core/'.$nomeClass.'.php');
        }

    });

    spl_autoload_register(function($nomeClass){

        if(file_exists('./Services/'.$nomeClass.'.php')){
            require_once('./Services/'.$nomeClass.'.php');
        }

    });

    spl_autoload_register(function($nomeClass){

        if(file_exists('./Database/'.$nomeClass.'.php')){
            require_once('./Database/'.$nomeClass.'.php');
        }

    });