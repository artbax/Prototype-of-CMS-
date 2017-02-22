<?php

require_once('Model.php');

class User extends Model
{
   
    public function getUser($username)
    {
        $query = "SELECT id, username, wallet FROM user WHERE username = '$username'";

        $select=$this->pdo->query($query);
        foreach ($select as $row) 
        {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
    }

    public function getCollection($name)
    {
        $query = "SELECT id_article FROM collection WHERE username = '$name'";
        $select=$this->pdo->query($query);
        foreach ($select as $row) 
        {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
    }

    public function getCollected($id)
    {
        $query = "SELECT articles.id, articles.title, articles.shortDescription, articles.content, articles.price, articles.category_id, articles.author_id, category.name as catname, author.name, author.surname FROM articles INNER JOIN category ON articles.category_id = category.id INNER JOIN author ON articles.author_id = author.id WHERE articles.id =".$id;
        $select=$this->pdo->query($query);
        foreach ($select as $row) 
        {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
    }


}



?>
