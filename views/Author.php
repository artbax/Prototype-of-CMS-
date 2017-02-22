<?php

require_once('views/View.php');

class AuthorView extends View
{
   public function index()
   {
      $authors=$this->loadModel('Author');
      $this->set('Author', $authors->index());
      $this->render('authors.view');
   }
}

?>
