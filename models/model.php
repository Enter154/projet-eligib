<?php

    include_once("models/user.php");  
    
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_errno) {
        printf("Échec de la connexion : %s\n", $conn->connect_error);
        exit();
    }
      
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