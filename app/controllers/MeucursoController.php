<?php
namespace app\controllers;
use app\core\Controller;

class MeucursoController extends Controller{
    
   public function index(){           
    $data["view"] = "meus_cursos";
    $this->load("template",$data);
   } 
}
