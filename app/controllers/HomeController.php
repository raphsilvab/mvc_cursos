<?php
namespace app\controllers;
use app\core\Controller;

class HomeController extends Controller{
    
   public function index(){           
      $data["view"] = "Home/Index";  
      $this->load("template",$data);
   } 
}
