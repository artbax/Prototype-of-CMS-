<?php

require_once('controllers/Controller.php');

class CategoryController extends Controller
{
   public function index()
   {
        $view = $this->loadView('Category');
        $view->index();
   }

   
}




















?>
