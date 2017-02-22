<?php require_once('top.view.html.php'); ?>

<table class="table table-hover">
    <thead>
            <tr class="success">
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>About</th>
                <th>Articles</th>
            </tr>
    </thead>

   <? foreach($this->get('Author') as $authors) { ?>
    
    <tbody>
    <tr class="active">
        <td><?= $authors['id']; ?></td>
        <td><?= $authors['name']; ?></td>
        <td><?= $authors['surname']; ?></td>
        <td><?= $authors['about']; ?></td>
        <td><a href="?controller=Article&amp;action=oneAuthor&amp;id=<?= $authors['id']; ?>"><button class="btn btn-success">Show articles</button></a></td>
    </tr>
    </tbody>
     <? } ?>
    </table>

<? require_once('bottom.view.html.php'); ?>
