<?php
namespace app\controllers;
use app\core\Controller;

class ComentarioController extends Controller{
    
   public function index(){           
    $data["view"] = "comentario";
    $this->load("template",$data);
   } 
}
