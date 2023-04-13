<?php
include '../config.php';
include '../Model/lieu_concert.php';

class lieu_concertC{
    function ajouterlieu_concert($lieu_concert)
    {
        $db = config::getConnexion();
        try {
            $sql = "INSERT INTO lieu_concert (ID,nom,adresse,temp_o,temp_f,capacite,image,description) 
            VALUES (:ID,:nom,:adresse,:temp_o,:temp_f,:capacite,:image,:description)";    
            $query = $db->prepare($sql);
            $query->execute([
                'ID' => $lieu_concert->getID(),
                'nom' => $lieu_concert->getnom(),
                'adresse' => $lieu_concert->getadresse(),
                'temp_o' => $lieu_concert->gettemp_o(),
                'temp_f' => $lieu_concert->gettemp_f(),
                'capacite' => $lieu_concert->getcapacite(),
                'image' => $lieu_concert->getimage(),
                'description' => $lieu_concert->getdescription()

            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function afficherlieu_concert(){
        $sql="SELECT * FROM lieu_concert";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
   
    function supprimerlieu_concert($ID){
        $sql=" DELETE FROM lieu_concert WHERE ID=:ID";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':ID' , $ID);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
function modifierlieu_concert($lieu_concert,$ID){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE lieu_concert SET ID= :ID,nom = :nom, adresse= :adresse, temp_o= :temp_o, temp_f=:temp_f,capacite=:capacite,image=:image,description=:description WHERE ID= :ID');
$query->execute([
    'ID'=> $lieu_concert->getID(),
    'nom'=> $lieu_concert->getnom(),
    'adresse'=> $lieu_concert->getadresse(),
    'temp_o'=> $lieu_concert->gettemp_o(),
    'temp_f'=> $lieu_concert->gettemp_f(),
    'capacite'=> $lieu_concert->getcapacite(),
    'image'=> $lieu_concert->getimage(),
    'description'=> $lieu_concert->getdescription(),

  
    
]);
    } catch (Exception $e){
        $e->getMessage();
}}
function recupererlieu_concert($ID){
    $sql="SELECT * from lieu_concert where ID=$ID";
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