<?php

require_once('Model.php');

class Login extends Model
{
   public function loginExecute($user, $pass)
   {
       if(empty($user) || empty($pass))
       {
		   header('Location:?controller=Login&action=index');
		   exit();
       }
     else 
     {
       $log=$this->pdo->prepare("SELECT username, password FROM user WHERE username = :user AND password = :pass ");
       $log->bindParam(':user', $user, PDO::PARAM_STR);
       $log->bindParam(':pass', $pass, PDO::PARAM_STR);
       $result = $log->execute();
       $rows = $log->fetchAll();
       $n = count($rows);
       if($n==1)
       {
         session_start();
         session_regenerate_id(true); 
         $_SESSION['user'] = $user;
         session_write_close();
         header('Location:?controller=User&action=index&name='.$user); 
         
       }
       else
       {
         header('Location:?controller=Login&action=index');
         exit();
       }

      $log->closeCursor();
    } 
  }

  public function logoutExecute()
   {
     session_start();
     $_SESSION = array();
     if (isset($_COOKIE[session_name()])) 
     { 
       setcookie(session_name(), '', time()-42000, '/'); 
     }
     session_destroy();
     $log = $this->render('login.view');
     
     
   }

}

?>
