<?php

    include("models/user.php");  
    require("models/connect.php");
    
    class Model {  

        private $co;

        public function getUserList()  
        { 
            if ($result = openCo()->query("SELECT UserName FROM utilisateurs LIMIT 10")) {
                printf("Select a retourné %d lignes.\n", $result->num_rows);
                return $result;
                $result->close();
            }
        }     
        public function getUser($username)  
        {  
            $allUser = $this->getUserList();  
            return $allUser[$username];  
        }  
            
    }  
?>