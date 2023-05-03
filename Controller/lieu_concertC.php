<?php
include_once '../config.php';
include '../Model/lieu_concert.php';


class lieu_concertC{
    function ajouterlieu_concert($lieu_concert)
    {
        $db = config::getConnexion();
        try {
            $sql = "INSERT INTO lieu_concert (id_LC,nom_LC,adresse,temp_O_LC,temp_F_LC,capacite,image,description) 
            VALUES (:id_LC,:nom_LC,:adresse,:temp_O_LC,:temp_F_LC,:capacite,:image,:description)";    
            $query = $db->prepare($sql);
            $query->execute([
                'id_LC' => $lieu_concert->getid_LC(),
                'nom_LC' => $lieu_concert->getnom_LC(),
                'adresse' => $lieu_concert->getadresse(),
                'temp_O_LC' => $lieu_concert->gettemp_O_LC(),
                'temp_F_LC' => $lieu_concert->gettemp_F_LC(),
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
   
    function supprimerlieu_concert($id_LC){
        $sql=" DELETE FROM lieu_concert WHERE id_LC=:id_LC";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_LC' , $id_LC);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }


    public function modifierlieu_concert($id, $lieu_concert)
{
    $db = config::getConnexion();
    try {
       $query = $db->prepare('UPDATE user SET id_LC= :id_LC,nom_LC = :nom_LC, adresse= :adresse, temp_O_LC= :temp_O_LC, temp_F_LC=:temp_F_LC,capacite=:capacite,image=:image,description=:description WHERE id_LC= :id_LC');
       $query->execute([ 
        'id_LC'=> $lieu_concert->getid_LC(),
        'nom_LC'=> $lieu_concert->getnom_LC(),
        'adresse'=> $lieu_concert->getadresse(),
        'temp_O_LC'=> $lieu_concert->gettemp_O_LC(),
        'temp_F_LC'=> $lieu_concert->gettemp_F_LC(),
        'capacite'=> $lieu_concert->getcapacite(),
        'image'=> $lieu_concert->getimage(),
        'description'=> $lieu_concert->getdescription(),

    ]);

    } catch(Exception $e) {
       die('Error: ' . $e->getMessage());
} 
}
function recupererlieu_concert($id_LC){
    $sql="SELECT * from lieu_concert where id_LC=$id_LC";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$service=$query->fetch();
return $service;
}catch (Exception $e){
    $e->getMessage();}
}
/*function modifierlieu_concert($lieu_concert,$id_LC){
       try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE lieu_concert SET id_LC= :id_LC,nom_LC = :nom_LC, adresse= :adresse, temp_O_LC= :temp_O_LC, temp_F_LC=:temp_F_LC,capacite=:capacite,image=:image,description=:description WHERE id_LC= :id_LC');
$query->execute([
    'id_LC'=> $lieu_concert->getid_LC(),
    'nom_LC'=> $lieu_concert->getnom_LC(),
    'adresse'=> $lieu_concert->getadresse(),
    'temp_O_LC'=> $lieu_concert->gettemp_O_LC(),
    'temp_F_LC'=> $lieu_concert->gettemp_F_LC(),
    'capacite'=> $lieu_concert->getcapacite(),
    'image'=> $lieu_concert->getimage(),
    'description'=> $lieu_concert->getdescription(),

  
    
]);
    } catch (Exception $e){
        $e->getMessage();
}}
function recupererlieu_concert($id_LC){
    $sql="SELECT * from lieu_concert where id_LC=$id_LC";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$service=$query->fetch();
return $service;
}catch (Exception $e){
    $e->getMessage();}
}*/


}




?>