<?php
include '../Controller/userc.php';

$pc = new Userc();


    $id = $_GET['idAC'];
    $role="admin" ; 
  
        $pc->AddAdmin($id,$role) ; 
      

        header('Location:index.php');
        
    
  
?>