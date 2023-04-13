<?php
    class config {
    private static $pdo = NULL;

    public static function getConnexion() {
      if (!isset(self::$pdo)) {
        try{
          self::$pdo = new PDO('mysql:host=localhost;dbname=fibelek', 'root', '',
          [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
          
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }
      return self::$pdo;
    }
  }

/*connet to database*/

/*$host='localhost';
    $user='root';
    $pass='';
    $db='fibelek';
    $con=mysqli_connect($host,$user,$pass,$db);
    $res=mysqli_query($con,"select * from cinema");*/


?>
