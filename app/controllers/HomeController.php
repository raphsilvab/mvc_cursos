<?php
namespace app\controllers;
use app\core\Controller;

class HomeController extends Controller{
    
   public function index(){           
      $data["view"] = "home";  
      $this->load("template",$data);
   } 
   public function cursos(){
      $data["view"] = "meus_cursos";
      $this->load("template",$data);
      # code...
   }
}
