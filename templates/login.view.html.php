<?php require_once('top.view.html.php'); ?>

<div class="container">
  <form class="form-signin" action="?controller=Login&amp;action=login" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus name="user">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
        <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
      </form>
</div>


<? require_once('bottom.view.html.php'); ?>
