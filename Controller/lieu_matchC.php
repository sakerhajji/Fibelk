<?php
include_once '../config.php';
include '../Model/lieu_match.php';
class lieu_matchC{
    function afficherlieu_match(){
        $sql="SELECT * FROM `lieu_match`";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function ajouterlieu_match($lieu_match)
{
    $db = config::getConnexion();
    try {
        $sql = "INSERT INTO lieu_match(`id_LM`, `nom_LM`, `temp_O_T`, `temp_F_T`, `capacite_M`, `adresse_M`, `image_T`, `description_M`)
        VALUES (:id_LM,:nom_LM,:temp_o,:temp_f,:capacite,:adresse,:image_T,:description_M)";    
        $query = $db->prepare($sql);
        $query->execute([
            'id_LM' => $lieu_match->getid_LM(),
            'nom_LM' => $lieu_match->getnom_LM(),
            'temp_o' => $lieu_match->gettemp_o(),
            'temp_f' => $lieu_match->gettemp_f(),
            'capacite' => $lieu_match->getcapacite(),
            'adresse' => $lieu_match->getadresse(),
            'image_T' => $lieu_match->getimage_T(),
            'description_M' => $lieu_match->getdescription()
        ]);
        
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}


 
    function supprimerlieu_match($id_LM){
        $sql=" DELETE FROM lieu_match WHERE id_LM=:id_LM";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_LM' , $id_LM);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
function modifierlieu_match($lieu_match,$id_LM){
       try{
        $db = config::getConnexion();
        $sql = "UPDATE `lieu_match` SET nom_LM=:nom_LM,temp_O_T=:temp_o,temp_F_T=:temp_f,capacite_M=:capacite,adresse_M=:adresse,image_T=:image_T,description_M=:description_ WHERE id_LM= :id_LM";
            $query = $db->prepare($sql);

$query->execute([
    'id_LM'=> $lieu_match->getid_LM(),
    'nom_LM'=> $lieu_match->getnom_LM(),
    'temp_o'=> $lieu_match->gettemp_o(),
    'temp_f'=> $lieu_match->gettemp_f(),
    'capacite'=> $lieu_match->getcapacite(),
    'adresse'=> $lieu_match->getadresse(),
    'image_T'=> $lieu_match->getimage_T(),
    'description_'=> $lieu_match->getdescription()

  
    
]);
    } catch (Exception $e){
        $e->getMessage();
}}
function recupererlieu_match($id_LM){
    $sql="SELECT * from lieu_match where id_LM=$id_LM";
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