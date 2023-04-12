<?php
include '../Controller/userc.php';

$pc = new Userc();


    $id = $_GET['idAC'];
  
        $pc->DeleteUser($id);
      

        header('Location:index.php');
        
    
  
?>