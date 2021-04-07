<?php
namespace app\controllers;
use app\core\Controller;

class CursoController extends Controller{
    
   public function index(){           
    $data["view"] = "curso";
    $this->load("template",$data);
   } 
}
