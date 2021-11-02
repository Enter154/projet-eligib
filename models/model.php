<?php

    include_once("model/Book.php");  
      
    class Model {  
        public function getUserList()  
        {    
            return array(  
                "Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book."),  
                "Moonwalker" => new Book("Moonwalker", "J. Walker", ""),  
                "PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "")  
            );  
        }     
        public function getUser($username)  
        {  
            $allBooks = $this->getUserList();  
            return $allBooks[$username];  
        }  
            
    }  
?>