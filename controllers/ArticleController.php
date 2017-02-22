<?php

require_once('controllers/Controller.php');

class ArticleController extends Controller
{
   public function index()
   {
        $view = $this->loadView('Article');
        $view->index();
   }

   public function oneArticle() 
   {
        $view = $this->loadView('Article');
        $view->showOne();
   }

   public function oneAuthor() 
   {
        $view = $this->loadView('Article');
        $view->showAuthorArticles();
   }

   public function oneCategory() 
   {
        $view = $this->loadView('Article');
        $view->showCategoryArticles();
   }

   public function articlesToBuy()
   {
        $view = $this->loadView('Article');
        $view->showPaidArticles();
   }

   public function buyingArticle()
   {
        $view = $this->loadView('Article');
        $view->buyingProcess();
       
   }
}




?>
