<?php
require('controller.php');

class Router{

    public function run()
    {
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