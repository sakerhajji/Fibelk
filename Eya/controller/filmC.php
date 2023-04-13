<?php
require '../config.php';
include '../model/film.php';
class filmC 
{


public function ajouterFilm($film)
{

    $pdo=config::getConnexion();
	try {
		$query=$pdo->prepare(
			"INSERT INTO film (IdFilm,NomFilm,DureeFilm,TypeFilm,DescriptionFilm,ImageFilm)
			VALUES (:IdFilm, :NomFilm, :DureeFilm, :TypeFilm, :DescriptionFilm, :ImageFilm)"
		);
		$query->execute([
            'IdFilm'=>$film->getIdFilm(),
			'NomFilm'=>$film->getNomFilm(),
			'DureeFilm'=>$film->getDureeFilm(),
			'TypeFilm'=>$film->getTypeFilm(),
			'DescriptionFilm'=>$film->getDescriptionFilm(),
			'ImageFilm'=>$film->getImageFilm(),
			
			
		]);
	}
	catch(PODException $e) {
		$e->getMessage();
	}
}

public function showFilm()
{
    $sql="SELECT * FROM film";
	$db = config::getConnexion();
	try{
		$afficheF = $db->query($sql);
		return $afficheF;
	}
	catch(Exception $e){
		die('Erreur:' . $e->getMessage());
	}
 
}

function RecupererFilm($idFi)
{
	$sql="SELECT * from film where IdFilm=$idFi";
    $db = config::getConnexion();
try{
    $query = $db->prepare($sql);
$query->execute();
$service=$query->fetch();
return $service;
}catch (Exception $e){
    $e->getMessage();}


}

function ModifierFilm($film , $iddFi)
{
	try{
        $db = config::getConnexion();
$query = $db->prepare('UPDATE film SET IdFilm= :idf,NomFilm = :nomf, DureeFilm= :dureefi, TypeFilm= :typef, DescriptionFilm=:descF,ImageFilm=:imgfi   WHERE IdFilm= :iddFi');
$query->execute([
    'idf'=> $film->getIdFilm(),
    'nomf'=> $film->getNomFilm(),
    'dureefi'=> $film->getDureeFilm(),
	'typef'=> $film->getTypeFilm(),
    'descF'=> $film->getDescriptionFilm(),
    'imgfi'=> $film->getImageFilm(),
	

  
    
]);
    } catch (Exception $e){
        $e->getMessage();
}


}
function SupprimerFilm($IdFilm)
{

	$sql ="DELETE FROM film WHERE IdFilm= :IdF";//: indication f bd bch nqulo fama valeur
    $db =config::getConnexion();
    $query=$db->prepare($sql);
    $query->bindvalue(':IdF',$IdFilm);
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































}
?>

































}





















?>