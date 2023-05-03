<?php
include '../Controller/userc.php';

$pc = new Userc();


    $id = $_GET['idAC'];
    $role="user" ; 
  
        $pc->AddAdmin($id,$role) ; 
      

        header('Location:index.php');
        echo('<script>alert("le suprision valide");</script>') ; 
        
    
  
?>