<?php
include_once '../config.php';
include '../Model/matchM.php';
class MatchC{
    function affichermatch(){
        $sql="SELECT * FROM `match`";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }

    public function addMatch($match) {
        $db = config::getConnexion();
        try {
            $req = $db->prepare('INSERT INTO `match` (id_M, nom_M, nom_equipe1, nom_equipe2, duree_P, type_P, description_P, image_P) 
            VALUES (:id_M, :nom_M, :nom_equipe1, :nom_equipe2, :duree_P, :type_P, :description, :image_P)');

           $req->execute([
            'id_M' => $match->getid_M(),
            'nom_M' => $match->getnom_M(),
            'nom_equipe1' => $match->getnom_equipe1(),
            'nom_equipe2' => $match->getnom_equipe2(),
            'duree_P' => $match->getduree_P(),
            'type_P' => $match->gettype_P(),
            'description' => $match->getdescription(),
            'image_P' => $match->getimage_P()
               

           ]);

        } catch(Exception $e) {
           die('Error: ' . $e->getMessage());
        }
   }




 
   
    function supprimermatch($id_M){
        $sql=" DELETE FROM `match` WHERE id_M=$id_M";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
function modifiermatch($match,$id_M){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE `match` SET id_M= :id_M,nom_M = :nom_M, nom_equipe1= :nom_equipe1, nom_equipe2= :nom_equipe2, duree_P=:duree_P,type_P=:type_P,description_P=:description_,image_P=:image_P WHERE id_M= :id_M');
$query->execute([
    'id_M'=> $match->getid_M(),
    'nom_M'=> $match->getnom_M(),
    'nom_equipe1'=> $match->getnom_equipe1(),
    'nom_equipe2'=> $match->getnom_equipe2(),
    'duree_P'=> $match->getduree_P(),
    'type_P'=> $match->gettype_P(),
    'description_'=> $match->getdescription(),
    'image_P'=> $match->getimage_P()

  
    
]);
    } catch (Exception $e){
        $e->getMessage();
}}
function recuperermatch($id_M){
    $sql="SELECT * from `match` where id_M=$id_M";
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