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
   public function perfil(){
      $data["view"] = "perfil";
      $this->load("template",$data);
      # code...
   }
   public function comentario(){
      $data["view"] = "comentario";
      $this->load("template", $data);
      # code...
   }
   public function login(){
      $data["view"] = "login";
      $this->load("template", $data);
      # code...
   }
}
