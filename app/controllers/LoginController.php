<?php
namespace app\controllers;
use app\core\Controller;

class LoginController extends Controller{
    
   public function index(){           
      echo "Index do Logout.";
   } 
     
   public function logout(){
      $data["view"] = "login";
      $this->load("template", $data);
      # code...
   }
}
