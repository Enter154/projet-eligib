<?php

        class User {  
            public $userID;  
            public $username;  
            public $mdp;  
            public $email;  
            
            public function __construct($userID, $username, $mdp, $email)    
            {    
                $this->userID = $userID;  
                $this->username = $username;  
                $this->mdp = $mdp;  
                $this->email = $email;  
            }   
        }  

?>