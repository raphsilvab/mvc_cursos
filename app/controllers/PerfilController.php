<?php
namespace app\controllers;
use app\core\Controller;

class PerfilController extends Controller{
    
   public function index(){           
    $data["view"] = "perfil";
    $this->load("template",$data);
   } 
}
