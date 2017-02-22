<?php

require_once('Model.php');

class Author extends Model
{
   private $name;
   private $surname;
   private $about; 

  
   public function setName($name)
   {
      $this->name = $name;
   }

   public function setSurname($surname)
   {
      $this->surname  = $surname;
   }

   public function setAbout($about)
   {
      $this->about = $about;
   }

   public function getName()
   {
      return $this->name;
   }

   public function getSurname()
   {
      return $this->surname;
   }

   public function getAbout()
   {
      return $this->about;
   } 

   public function index()
   {
        $query="SELECT id, name, surname, about FROM author";
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
