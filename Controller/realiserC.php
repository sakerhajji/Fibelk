<?php
include '../config.php';
include '../Model/realiser.php';

class realiserC{
    function ajouterrealiser($realiser)
    {
        $db = config::getConnexion();
        try {
            $sql = "INSERT INTO realiser (id_t,id_p,date_de_realisation,heure_p,prix_p) 
            VALUES (:id_t,:id_p,:date_,:heure_p,:prix_p)";    
            $query = $db->prepare($sql);
            $query->execute([
                'id_t' => $realiser->getid_t(),
                'id_p' => $realiser->getid_e(),
                'date_' => $realiser->getdate(),
                'heure_p' => $realiser->getheure_d(),
                'prix_p' => $realiser->getprix()

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function afficherrealiser(){
        $sql="SELECT * FROM realiser";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimerrealiser($id_t){
        $sql=" DELETE FROM realiser WHERE id_t=$id_t";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_t' , $id_t);

        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
function modifierrealiser($realiser,$id){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE realiser SET id_t=:id_t,id_p=:id_p,date_de_realisation=:date_,heure_p=:heure_p,prix_p=:prix_p WHERE id_t=:id_t');
$query->execute([
    'id_t' => $realiser->getid_t(),
    'id_p' => $realiser->getid_e(),
    'date_' => $realiser->getdate(),
    'heure_p' => $realiser->getheure_d(),
    'prix_p' => $realiser->getprix()
    
  
    
]);
    } catch (Exception $e){
        $e->getMessage();
}}
function recupererrealiser($id_t){
    $sql="SELECT * from realiser where id_t=$id_t";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$service=$query->fetch();
return $service;
}catch (Exception $e){
    $e->getMessage();}
}




}
?>