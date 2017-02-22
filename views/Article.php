<?php

require_once('views/View.php');

class ArticleView extends View
{

   public function  index() 
   {
        $art=$this->loadModel('Article');
        $this->set('Article', $art->index());
        $this->render('articles.view');
   }

   public function  showOne() 
   {
        $art = $this->loadModel('Article');
        $this->set('Article', $art->getOne($_GET['id']));
        $this->render('oneArticle.view');
   }

   public function  showAuthorArticles() 
   {
        $art = $this->loadModel('Article');
        $this->set('Article', $art->getAuthorArticles($_GET['id']));
        $this->render('authorArticles.view');
   } 

   public function  showCategoryArticles() 
   {
        $art = $this->loadModel('Article');
        $this->set('Article', $art->getCategoryArticles($_GET['id']));
        $this->render('categoryArticles.view');
   }

   public function showPaidArticles()
   {
       $art = $this->loadModel('Article');
       $this->set('Article', $art->showPaid());
       $this->render('paidArticles.view');
   }

   public function buyingProcess()
   {
       $art = $this->loadModel('Article');
       $this->set('Article', $art->buyingProcess($_GET['id'], $_GET['price'], $_GET['user']));

       $this->render('info.view');
   }
  
}


?>
