<?php
include '../config.php';
include '../Model/lieu_match.php';
class lieu_matchC{
    function ajouterlieu_match($lieu_match)
    {
        $db = config::getConnexion();
        try {
            $sql = "INSERT INTO lieu_match (id_LM,nom_LM,adresse,temp_o,temp_f,capacite,image_T,description) 
            VALUES (:id_LM,:nom_LM,:adresse,:temp_o,:temp_f,:capacite,:image_T,:description_)";    
            $query = $db->prepare($sql);
            $query->execute([
                'id_LM' => $lieu_match->getid_LM(),
                'nom_LM' => $lieu_match->getnom_LM(),
                'adresse' => $lieu_match->getadresse(),
                'temp_o' => $lieu_match->gettemp_o(),
                'temp_f' => $lieu_match->gettemp_f(),
                'capacite' => $lieu_match->getcapacite(),
                'image_T' => $lieu_match->getimage_T(),
                'description_' => $lieu_match->getdescription()

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function afficherlieu_match(){
        $sql="SELECT * FROM lieu_match";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
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
$query = $db->prepare('UPDATE lieu_match SET id_LM= :id_LM,nom_LM = :nom_LM, adresse= :adresse, temp_o= :temp_o, temp_f=:temp_f,capacite=:capacite,image_T=:image_T,description=:description WHERE id_LM= :id_LM');
$query->execute([
    'id_LM'=> $lieu_match->getid_LM(),
    'nom_LM'=> $lieu_match->getnom_LM(),
    'adresse'=> $lieu_match->getadresse(),
    'temp_o'=> $lieu_match->gettemp_o(),
    'temp_f'=> $lieu_match->gettemp_f(),
    'capacite'=> $lieu_match->getcapacite(),
    'image_T'=> $lieu_match->getimage_T(),
    'description'=> $lieu_match->getdescription(),

  
    
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