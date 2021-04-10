<?php
namespace app\controllers;
use app\core\Controller;

class AulaController extends Controller{
    
   public function index(){           
    $data["view"] = "Aula/Index";
    $this->load("template",$data);
   } 
}
