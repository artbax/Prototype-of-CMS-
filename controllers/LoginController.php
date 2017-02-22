<?php

require_once('controllers/Controller.php');

class LoginController extends Controller
{
   public function index()
   {
       $log = $this->loadView('Login');
       $log->loadForm();
   }

   public function login()
   {
	   $log = $this->loadView('Login');
	   $log->loginProcess();
   }

   public function logout()
   {
	   $log = $this->loadView('Login');
	   $log->logoutProcess();
   }
}

?>
