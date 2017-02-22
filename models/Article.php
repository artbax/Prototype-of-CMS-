<?php

require_once('Model.php');

class Article extends Model
{
    private $title;
	private $shortDescription;
	private $content;
	private $price;
    private $tags;
    private $category; // może nie miec kategorii
    private $author = array(); //może być kilku autorow

    public function setTitle($title)
    {
       $this->title = $title; 
    } 

    public function setShortDescription($shortDescription)
    {
       $this->shortDescription = $shortDescription; 
    } 

    public function setContent($content)
    {
       $this->content = $content;
    }

    public function setPrice($price)
    {
       $this->price = $price;
    }

    public function setCategory($category)
    {
       $this->category = $category;
    }

    public function setTags($tags)
    {
       $this->tags = $tags;
    }

    public function setAuthor($author)
    {
       $this->author = $author;
    }

    

    public function getTitle()
    {
       return $this->title;
    } 

    public function getShortDescription()
    {
       return $this->shortDescription;
    } 

    public function getContent()
    {
       return $this->content;
    } 

    public function getPrice()
    {
       return $this->price;
    }

    public function getTags()
    {
       return $this->tags;
    } 

    public function getCategory()
    {
       return $this->category;
    }

    public function getAuthor()
    {
       foreach($this->author as $v)
       {
           echo $v->getName()." ".$v->getSurname()." ".$v->getAbout()."<br />";
       } 
    }

    
    public function index() 
    { 
        $query="SELECT articles.id, articles.title, articles.shortDescription, articles.content, articles.price, articles.category_id, articles.author_id, category.name as catname, author.name, author.surname FROM articles INNER JOIN category ON articles.category_id = category.id INNER JOIN author ON articles.author_id = author.id WHERE articles.price = 0";
        $select=$this->pdo->query($query);
        foreach ($select as $row) 
        {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
    }

   public function showPaid() 
   { 
        $query="SELECT articles.id, articles.title, articles.shortDescription, articles.price, articles.category_id, articles.author_id, category.name as catname, author.name, author.surname FROM articles INNER JOIN category ON articles.category_id = category.id INNER JOIN author ON articles.author_id = author.id WHERE articles.price > 0";
        $select=$this->pdo->query($query);
        foreach ($select as $row) 
        {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
    }

   public function getOne($id) 
   { 
         
        $query="SELECT articles.id, articles.title, articles.shortDescription, articles.price, articles.category_id, articles.author_id, category.name as catname, author.name, author.surname FROM articles INNER JOIN category ON articles.category_id = category.id INNER JOIN author ON articles.author_id = author.id WHERE articles.id =".$id;
         
        $select=$this->pdo->query($query);
        foreach ($select as $row) 
        {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
    }

   public function getAuthorArticles($id)
   {
        $query="SELECT articles.id, articles.title, articles.shortDescription, articles.price, articles.category_id, articles.author_id, category.name as catname, author.name, author.surname FROM articles INNER JOIN category ON articles.category_id = category.id INNER JOIN author ON articles.author_id = author.id WHERE author.id =".$id;
         
        $select=$this->pdo->query($query);
        foreach ($select as $row) 
        {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
   }

   public function getCategoryArticles($id)
   {
        $query="SELECT articles.id, articles.title, articles.shortDescription, articles.price, articles.category_id, articles.author_id, category.name as catname, author.name, author.surname FROM articles INNER JOIN category ON articles.category_id = category.id INNER JOIN author ON articles.author_id = author.id WHERE articles.category_id =".$id;
         
        $select=$this->pdo->query($query);
        foreach ($select as $row) 
        {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
   }

   public function buyingProcess($id, $price, $user)
   {
        $query = "UPDATE user SET wallet = wallet - '$price' WHERE username = '$user'";
        $do = $this->pdo->query($query);

        $query = "INSERT INTO collection (username, id_article) VALUES ('$user', '$id')";
        $do = $this->pdo->query($query);

        $do->closeCursor();

   }

     
}

?>
