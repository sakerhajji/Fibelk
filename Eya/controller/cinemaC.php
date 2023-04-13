<?php
require '../config.php';
include '../model/cinema.php';
class cinemaC {

/* fonction ajout cinema */ 

public function ajouterC($cinema){
	$pdo=config::getConnexion();
	try {
		$query=$pdo->prepare(
			"INSERT INTO cinema (IdCinema,NomCin,NbrSalleCin,NbrPlaceSalleCin,TempOCinema,TempFCinema,ImageCine)
			VALUES (:idCinema, :NomCin, :NbrSalleCin, :NbrPlaceSalleCin, :TempOCinema, :TempFCinema, :ImageCine)"
		);
		$query->execute([
            'idCinema'=>$cinema->getIdCinema(),
			'NomCin'=>$cinema->getNomCinema(),
			'NbrSalleCin'=>$cinema->getNbrSalleCin(),
			'NbrPlaceSalleCin'=>$cinema->getNbrPlaceSalleCin(),
			'TempOCinema'=>$cinema->getTempOCinema(),
			'TempFCinema'=>$cinema->getTempFCinema(),
			'ImageCine'=>$cinema->getImageCinema(),
			
		]);
	}
	catch(PODException $e) {
		$e->getMessage();
	}
}

function showCinema()
{
	$sql="SELECT * FROM cinema";
	$db = config::getConnexion();
	try{
		$afficheC = $db->query($sql);
		return $afficheC;
	}
	catch(Exception $e){
		die('Erreur:' . $e->getMessage());
	}




}

function RecupererCinema($idC)
{
	$sql="SELECT * from cinema where IdCinema=$idC";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$service=$query->fetch();
return $service;
}catch (Exception $e){
    $e->getMessage();}


}

function ModifierCinema($cinema , $idd)
{
	try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE cinema SET IdCinema= :idc,NomCin = :nomc, NbrSalleCin= :nbrc, NbrPlaceSalleCin= :placec, TempOCinema=:debutTC,TempFCinema=:finTC  , ImageCine=:photoC WHERE IdCinema= :idc');
$query->execute([
    'idc'=> $cinema->getIdCinema(),
    'nomc'=> $cinema->getNomCinema(),
    'nbrc'=> $cinema->getNbrSalleCin(),
	'placec'=> $cinema->getNbrPlaceSalleCin(),
    'debutTC'=> $cinema->getTempOCinema(),
    'finTC'=> $cinema->getTempFCinema(),
	'photoC'=>$cinema->getImageCinema(),

  
    
]);
    } catch (Exception $e){
        $e->getMessage();
}


}
function SupprimerCinema($IdCinema)
{

	$sql ="DELETE FROM cinema WHERE IdCinema= :IdC";//: indication f bd bch nqulo fama valeur
    $db =config::getConnexion();
    $query=$db->prepare($sql);
    $query->bindvalue(':IdC',$IdCinema);
    try {
$query->execute();

    }catch(PDOException $e){
        $e->getMessage();
    }


	/*$sql=" DELETE FROM piece WHERE id_p=:id";
	$db = config::getConnexion();
	$req = $db->prepare($sql);
	$req->bindValue(':id' , $id);
	try{
		$req->execute();
	}
	catch(Exception $e){
		die('Erreur:' . $e->getMessage());
	}*/


}



/*<?php
include 'config.php';
$pdo=getConnexion();

$sql = 'SELECT * FROM assurance WHERE mail=:id and num_contrat like :keyword';
$req = $pdo->prepare($sql);
$req->bindValue(':id',$_GET['id']);
$req->bindValue(':keyword',$_GET['keyword']);
$req->execute();
$assurance = $req->fetchAll();

include'afficher.php';
echo'</table>';

?>*/
 function chercherCinema($id)
 {


	
 }































}
?>