<?php require_once('top.view.html.php'); ?>

<table class="table table-hover">
    <thead>
            <tr class="success">
                <th>Title</th>
                <th>Description</th>
                <th>Price(PLN)</th>
                <th>Category</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
    </thead>
    <? foreach($this->get('Article') as $articles) { ?>
    
    <tbody>
    <tr class="active">
        <td><?= $articles['title']; ?></td>
        <td><?= $articles['shortDescription']; ?></td>
        <td><?= $articles['price']; ?></td>
        <td><a href="#"><?= $articles['catname']; ?></a></td>
        <td><a href="#"><?= $articles['name']." ".$articles['surname']; ?></a></td>
        <td><a href="?controller=Article&amp;action=buyingArticle&amp;id=<?= $articles['id']; ?>&price=<?= $articles['price']; ?>&user=<?= $_SESSION['user']; ?>"><button class="btn btn-success">Buy this article</button></a></td>
        
    </tr>
    </tbody>
     <? } ?>
</table>

<? require_once('bottom.view.html.php'); ?>
