<?php

require_once('views/View.php');

class LoginView extends View
{
   public function loadForm()
   {
      $view = $this->render('login.view');
   }

   public function loginProcess()
   {
      $view = $this->loadModel('Login');
      $this->set('Login', $view->loginExecute($_POST['user'], $_POST['pass']));
   }

   public function logoutProcess()
   {
      $view = $this->loadModel('Login');
      $this->set('Login', $view->logoutExecute());
   }
}






?>
