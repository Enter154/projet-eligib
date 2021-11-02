<?php

    include_once("models/model.php");

    class Controller {  
        public $model;   
      
        public function __construct()    
        {    
              $this->model = new Model();  
        }   
          
        public function invoke()  
        {  
              if (!isset($_GET['user']))  
              {  
                  $user = $this->model->getUserList();  
                  include 'views/userlist.php'; 
              } 
              else 
              { 
                  $user = $this->model->getUser($_GET['user']); 
                  include 'views/user.php';  
              }  
        }  
    }  