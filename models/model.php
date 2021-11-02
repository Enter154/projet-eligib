<?php

    include_once("models/user.php");  
      
    class Model {  
        public function getUserList()  
        { 
            return array(  
                "Alt236" => new User("1", "Alt236", "AAA", "a@gmail.com"),  
                "Alt237" => new User("2", "Alt237", "AAA", "b@gmail.com"),  
                "Alt238" => new User("3", "Alt238", "AAA", "c@gmail.com")
            );  
        }     
        public function getUser($username)  
        {  
            $allUser = $this->getUserList();  
            return $allUser[$username];  
        }  
            
    }  
?>