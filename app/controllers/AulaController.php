<?php
namespace app\controllers;
use app\core\Controller;

class AulaController extends Controller{
    
   public function index(){           
    $data["view"] = "aula";
    $this->load("template",$data);
   } 
}
