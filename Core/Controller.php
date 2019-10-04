<?php
    //namespace Core;

    class Controller{
        public function render($view,$data){
            require_once('./Views/'.$view.'.php');
        }
    }