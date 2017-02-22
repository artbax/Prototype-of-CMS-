<?php

require_once('views/View.php');

class CategoryView extends View
{

   public function  index() 
   {
        $categories=$this->loadModel('Category');
        $this->set('Category', $categories->index());
        $this->render('categories.view');
   }

}

?>
