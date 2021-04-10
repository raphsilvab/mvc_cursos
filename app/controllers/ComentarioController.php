<?php
namespace app\controllers;
use app\core\Controller;

class ComentarioController extends Controller{
    
   public function index(){           
    $data["view"] = "Comentario/Index";
    $this->load("template",$data);
   } 
}
