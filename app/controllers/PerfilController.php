<?php
namespace app\controllers;
use app\core\Controller;

class PerfilController extends Controller{
    
   public function index(){           
    $data["view"] = "Perfil/Index";
    $this->load("template",$data);
   } 
}
