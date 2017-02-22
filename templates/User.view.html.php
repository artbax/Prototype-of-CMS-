<?php require_once('top.view.html.php'); ?>
 
  <table class="table table-hover">
    <thead>
            <tr class="success">
                <th>Id</th>
                <th>Username</th>
                <th>Wallet</th>
                <th>Collection</th>
                <th>Articles to buy</th>
            </tr>
    </thead>

    <? foreach($this->get('User') as $user) { ?>
    
    <tbody>
    <tr class="active">
        <td><?= $user['id']; ?></td>
        <td><?= $user['username']; ?></td>
        <td><?= $user['wallet']; ?></td>
        <td><a href="?controller=User&action=checkCollection&name=<?= $_SESSION['user']; ?>"><button class="btn btn-success">Check your collection</button><a/></td>
        <td><a href="?controller=Article&action=articlesToBuy"><button class="btn btn-success">Click</button></a></li>
    </tr>
    </tbody>
     <? } ?>
    </table>

<? require_once('bottom.view.html.php'); ?>




