<?php require_once('top.view.html.php'); ?>

    <table class="table table-hover">
    <thead>
            <tr class="success">
                <th>Id</th>
                <th>Name</th>
                <th>Articles</th>
            </tr>
    </thead>

   <? foreach($this->get('Category') as $categories) { ?>
    
    <tbody>
    <tr class="active">
        <td><?= $categories['id']; ?></td>
        <td><?= $categories['name']; ?></td>
        <td><a href="?controller=Article&amp;action=oneCategory&amp;id=<?= $categories['id']; ?>"><button class="btn btn-success">Show articles</button></a></td>
    </tr>
    </tbody>
     <? } ?>
    </table>

<? require_once('bottom.view.html.php'); ?>
