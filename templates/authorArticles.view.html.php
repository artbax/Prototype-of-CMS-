<?php  require_once('top.view.html.php'); ?>

   <table class="table table-hover">
    <thead>
            <tr class="success">
                <th>Id</th>
                <th>Title</th>
                <th>Description</th> 
                <th>Price</th>
                <th>Category</th>
                <th>Author</th>
            </tr>
    </thead>

   <? foreach($this->get('Article') as $articles) { ?>
    
    <tbody>
    <tr class="active">
        <td><?= $articles['id']; ?></td>
        <td><?= $articles['title']; ?></td> 
        <td><?= $articles['shortDescription']; ?></td>
        <td><?= $articles['price']; ?></td>
        <td><a href="?controller=Article&amp;action=oneCategory&amp;id=<?= $articles['category_id']; ?>"><?= $articles['catname']; ?></a></td>
        <td><?= $articles['name']." ".$articles['surname']; ?></td>
    </tr>
    </tbody>
     <? } ?>
    </table>

<? require_once('bottom.view.html.php'); ?>
