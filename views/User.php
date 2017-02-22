<?php

require_once('views/View.php');

class UserView extends View
{
   public function showUser()
   {
		$user = $this->loadModel('User');
		$this->set('User', $user->getUser($_GET['name']));
		$this->render('User.view');
   }

   public function showCollection()
   {
		$user = $this->loadModel('User');
		$this->set('User', $user->getCollection($_GET['name']));
		$this->render('Collection.view');
   }

   public function showCollected()
   {
		$user = $this->loadModel('User');
		$this->set('User', $user->getCollected($_GET['id']));
		$this->render('Collected.view');
   }
}


?>
