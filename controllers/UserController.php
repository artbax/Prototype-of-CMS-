<?php

require_once('controllers/Controller.php');

class UserController extends Controller
{

    public function index()
    {
        $view = $this->loadView('User');
        $view->showUser();
    }

    public function checkCollection()
    {
        $view = $this->loadView('User');
        $view->showCollection();
    }

    public function collectedArticles()
    {
        $view = $this->loadView('User');
        $view->showCollected();
    }

}

?>
