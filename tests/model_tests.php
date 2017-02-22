<?php

require_once('../models/Article.php');
require_once('../models/Category.php');
require_once('../models/Author.php');
require_once('csv_to_array.php');

//--------------test-------------------------------------------------
$category = new Category();
$category->setCategoryName("ekonomia");

$authorOne = new Author();
$authorOne->setName("Artur");
$authorOne->setSurname("Borkowski");
$authorOne->setAbout("Ten, ktory pisze program komputerowy"); 

$authorTwo = new Author();
$authorTwo->setName("Gilbert");
$authorTwo->setSurname("Borkowski");
$authorTwo->setAbout("Ten, ktory bawi sie zabawkami");

$authors[] = $authorOne;
$authors[] = $authorTwo;

$title = "Co jest istotne w ekonomii";
$description = "krotki opis";
$content = "kilka razy krotki opis";
$price = 20;
$tags = "pkb, brutto, netto, zysk";

$article = new Article();
$article->setTitle($title);
$article->setShortDescription($description);
$article->setContent($content);
$article->setPrice($price);
$article->setTags($tags);
$article->setCategory($category->getCategoryName());
$article->setAuthor($authors);


echo $article->getTitle()."<br />";
echo $article->getShortDescription()."<br />";
echo $article->getContent()."<br />";
echo $article->getPrice()."<br />";
echo $article->getTags()."<br />";
echo $article->getCategory()."<br />";
$article->getAuthor();
echo "<br />";
//--------------------------------------------------------------------

//-----------------------test--dane z pliku---------------------------
$tab = array();
$tab = csv_to_array("Data.csv", $delimiter=",");

foreach($tab as $key => $value)
{
    $arr = array();
    $author = array();
   
    foreach($value as $w)
    {
      $arr[] = $w; 
      
    }
    
    $author[] = new Author($arr[6], null, null);

    $article = new Article();
    $article->setTitle($arr[0]);
    $article->setShortDescription($arr[1]);
    $article->setContent($arr[2]);
    $article->setPrice($arr[3]); 
    $article->setCategory($arr[4]); 
    $article->setTags($arr[5]); 
    $article->setAuthor($author);
    
    
    echo "Title: ".$article->getTitle()."<br />";
	echo "Description: ".$article->getShortDescription()."<br />";
	echo "Content: ".$article->getContent()."<br />";
	echo "Price: ".$article->getPrice()."<br />";
	echo "Category: ".$article->getCategory()."<br />";
    echo "Tags: ".$article->getTags()."<br />";
    echo "Author(s): ";
	$article->getAuthor();
    echo "<br />";
      
}
//-------------------------------------------------------------------------


?>

