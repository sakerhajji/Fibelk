<?php
include '../config.php';
include '../Model/piece.php';

class pieceC{
    function ajouterpiece($piece)
    {
        $db = config::getConnexion();
        try {
            $sql = "INSERT INTO piece (id_p,nom_p,duree_p,type_p,description_p,image_p) 
            VALUES (:id,:nom,:duree,:type_p,:description_p,:photo)";    
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $piece->getid(),
                'nom' => $piece->getnom(),
                'duree' => $piece->getduree(),
                'type_p' => $piece->gettype(),
                'description_p' => $piece->getdescription(),
                'photo' => $piece->getphoto()

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function afficherpiece(){
        $sql="SELECT * FROM piece";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimerpiece($id){
        $sql=" DELETE FROM piece WHERE id_p=:id";
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
function modifierpiece($piece,$id){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE piece SET id_p= :id,nom_p = :nom, duree_p= :duree, type_p= :type_p, description_p=:description_p,image_p=:photo WHERE id_p= :id');
$query->execute([
    'id'=> $piece->getid(),
    'nom'=> $piece->getnom(),
    'duree'=> $piece->getduree(),
    'type_p'=> $piece->gettype(),
    'description_p'=> $piece->getdescription(),
    'photo'=> $piece->getphoto(),

  
    
]);
    } catch (Exception $e){
        $e->getMessage();
}}
function recupererpiece($id){
    $sql="SELECT * from piece where id_p=$id";
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