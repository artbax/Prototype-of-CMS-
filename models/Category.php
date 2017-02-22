<?php

require_once('Model.php');

class Category extends Model
{
   private $categoryName;
   
   public function setCategoryName($name)
   {
      $this->categoryName = $name;
   }

   public function getCategoryName()
   {
      return $this->categoryName;
   }

   public function index()
   {
        $query = "SELECT * FROM category";
        $select = $this->pdo->query($query);
        foreach ($select as $row) 
        {
            $data[]=$row;
        }
        $select->closeCursor();

        return $data;
   }
}



?>
