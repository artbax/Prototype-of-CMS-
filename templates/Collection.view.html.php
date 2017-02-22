<?php require_once('top.view.html.php'); ?>

<table class="table table-hover">
    <thead>
            <tr class="success">
                <th>Bought articles</th>
             </tr>
    </thead>

    <? foreach($this->get('User') as $user) { ?>
    
    <tbody>
    <tr class="active">
        <td><a href="?controller=User&action=collectedArticles&id=<?= $user['id_article']; ?>"><button class="btn btn-success">Go to article: <?= $user['id_article']; ?></button></a></td>
    </tr>
    </tbody>
     <? } ?>
    </table>

<? require_once('bottom.view.html.php'); ?>
