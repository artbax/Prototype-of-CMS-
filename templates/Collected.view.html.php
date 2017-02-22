<?php require_once('top.view.html.php'); ?>

<table class="table table-hover">
    <thead>
            <tr class="success">
                <th>Title</th>
                <th>Description</th>
                <th>Content</th>
                <th>Price(PLN)</th>
                <th>Categoria</th>
                <th>Author</th>
                
            </tr>
    </thead>
    <? foreach($this->get('User') as $articles) { ?>
    
    <tbody>
    <tr class="active">
        <td><?= $articles['title']; ?></td>
        <td><?= $articles['shortDescription']; ?></td>
        <td><?= $articles['content']; ?></td>
        <td><a href="#"><button class="btn btn-success">You bought article :)</button></a></td>
        <td><a href=""><?= $articles['catname']; ?></a></td>
        <td><a href=""><?= $articles['name']." ".$articles['surname']; ?></a></td>
        
        
    </tr>
    </tbody>
     <? } ?>
    </table>

<? require_once('bottom.view.html.php'); ?>
