<?php
include '../config.php';
include '../Model/theatre.php';

class theatreC{
    function ajoutertheatre($theatre)
    {
        $db = config::getConnexion();
        try {
            $sql = "INSERT INTO theatre (id_t,nom_t,temp_o_t,temp_f_t,capacite,adresse,image_t,description_t) 
            VALUES (:id_t,:nom_t,:temp_o_t,:temp_f_t,:capacite,:adresse,:image_,:description_)";    
            $query = $db->prepare($sql);
            $query->execute([
                'id_t' => $theatre->getid(),
                'nom_t' => $theatre->getnom(),
                'temp_o_t' => $theatre->gettemp_o(),
                'temp_f_t' => $theatre->gettemp_f(),
                'capacite' => $theatre->getcapacite(),
                'adresse' => $theatre->getadresse(),
                'image_' => $theatre->getphoto(),
                'description_' => $theatre->getdescription()



            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function affichertheatre(){
        $sql="SELECT * FROM theatre";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimertheatre($id){
        $sql=" DELETE FROM theatre WHERE id_t=:id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id' , $id);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
function modifiertheatre($theatre,$id){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE theatre SET id_t= :id,nom_t = :nom, temp_o_t= :temp_o_t, temp_f_t= :temp_f_t, capacite=:capacite,adresse=:adresse,image_t=:image_,description_t=:description_ WHERE id_t= :id');
$query->execute([
    'id'=> $theatre->getid(),
    'nom'=> $theatre->getnom(),
    'temp_o_t'=> $theatre->gettemp_o(),
    'temp_f_t'=> $theatre->gettemp_f(),
    'capacite'=> $theatre->getcapacite(),
    'adresse'=> $theatre->getadresse(),
    'image_'=> $theatre->getphoto(),
    'description_'=> $theatre->getdescription()


  
    
]);
    } catch (Exception $e){
        $e->getMessage();
}}
function recuperertheatre($id){
    $sql="SELECT * from theatre where id_t=$id";
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