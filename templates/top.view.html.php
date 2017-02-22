<?php session_start(); ?>
<!doctype html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Articles</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
<body>
 <div class="container">
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                 <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
		         </button>
		          <a class="navbar-brand" href="?controller=Article&amp;action=index&amp;">Articles</a>
               </div>

               <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <? if(isset($_SESSION['user']) && !empty($_SESSION['user'])) { ?>
                    <li class="active"><a href="?controller=User&amp;action=index&amp;name=<?= $_SESSION['user']; ?>"><? echo "Hello ".$_SESSION['user']." !!"; ?></a></li>
                    <li><a href="?controller=Article&amp;action=index&amp;">Home</a></li>
                    <li><a href="?controller=Author&amp;action=index&amp;">Authors</a></li>
                    <li><a href="?controller=Category&amp;action=index">Categories</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="?controller=Login&action=logout"><span class="glyphicon glyphicon-log-out"></span>Log out</a></li>
                  </ul>
                    <? } 
                       else
                       {
                    ?>
                  <ul class="nav navbar-nav navbar-right">
                   <li><a href="?controller=Login&amp;action=index"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                   
                  </ul>
                    <? } ?>
                  
               </div>
     </nav>
