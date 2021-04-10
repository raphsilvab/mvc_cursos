<?php
namespace app\controllers;
use app\core\Controller;

class MeucursoController extends Controller{
    
   public function index(){           
    $data["view"] = "MeusCursos/Index";
    $this->load("template",$data);
   } 
}
