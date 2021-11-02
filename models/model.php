<?php

    include_once("models/user.php");  
    require_once("connect.php");
      
    $conn = 
    class Model {  
        public function getUserList()  
        { 
          if ($result = $conn->query("SELECT UserName FROM utilisateurs LIMIT 10")) {
            printf("Select a retourné %d lignes.\n", $result->num_rows);

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