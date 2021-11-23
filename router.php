<?php
    include_once("Controller/PostController.php");  
    
    $controller = new PostController();  
    $controller->invoke();  

    class Router{

        public function run()
        {
            $route = $_GET['route'] ?? null;
            if (isset($_GET['action'])){
                $action = $_GET['action'];

                if ('post' === $action) {
                    var_dump('toto');
                } elseif ('contact' === $action) {
                    var_dump('contact');
                }
            } else {
                require_once 'index.php';
            }
        }
    }