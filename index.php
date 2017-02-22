<?php 

		if(!isset($_GET['controller']) && !isset($_GET['action']))
		{
		   header('Location:index.php?controller=Article&action=index');  
		}
		else
		{
				if($_GET['controller']=='Category') 
				{
						include_once 'controllers/CategoryController.php';
						$ob = new CategoryController();
						$ob->$_GET['action']();
				} 
				else if($_GET['controller']=='Article') 
				{
						include_once 'controllers/ArticleController.php';
						$ob = new ArticleController();
						$ob->$_GET['action']();
				} 
				else if($_GET['controller']=='Author') 
				{
						include_once 'controllers/AuthorController.php';
						$ob = new AuthorController();
						$ob->$_GET['action']();
				} 
                else if($_GET['controller']=='Login') 
				{
						include_once 'controllers/LoginController.php';
						$ob = new LoginController();
						$ob->$_GET['action']();
				} 
                else if($_GET['controller']=='User') 
				{
						include_once 'controllers/UserController.php';
						$ob = new UserController();
						$ob->$_GET['action']();
				} 
				else 
				{
						$ob = new ArticleController();
						$ob->index();
				}
		}






?>
