<?php require_once('top.view.html.php'); ?>

  <table class="table table-hover">
    <thead>
            <tr class="success">
                <th>Title</th>
                <th>Description</th>
                <th>Price(PLN)</th>
                <th>Categoria</th>
                <th>Author</th>
            </tr>
    </thead>
    <? foreach($this->get('Article') as $articles) { ?>
    
    <tbody>
    <tr class="active">
        <td><?= $articles['title']; ?></td>
        <td><?= $articles['shortDescription']; ?></td>
        <td><?= $articles['price']; ?></td>
        <td><a href="?controller=Article&amp;action=oneCategory&amp;id=<?= $articles['category_id']; ?>"><?= $articles['catname']; ?></a></td>
        <td><a href="?controller=Article&amp;action=oneAuthor&amp;id=<?= $articles['author_id']; ?>"><?= $articles['name']." ".$articles['surname']; ?></a></td>
    </tr>
    </tbody>
     <? } ?>
    </table>

<? require_once('bottom.view.html.php'); ?>
