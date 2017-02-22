<?php

require_once('controllers/Controller.php');

class AuthorController extends Controller
{
   
   public function index()
   {
      $view = $this->loadView('Author');
      $view->index(); 
   }
}


?>
