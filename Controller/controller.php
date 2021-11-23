<?php

include_once("model/Model.php");  
  
class Controller {  
     public $model;   
  
     public function __construct()    
     {    
          $this->model = new Model();  
     }   
    
     public function invoke()  
     {

          if (!isset($_GET['id']))  
          {  
               $post = $this->model->getPost();  
               include 'view/list.php'; 
          } 
          else 
          { 
               $post = $this->model->getPost($_GET['id']); 
               include 'view/solo.php';  
          }  
     }  
}  