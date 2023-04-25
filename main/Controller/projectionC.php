<?php
require '../config.php';
include '../model/Projection.php';


class ProjectionC {


    public function ajouterFilm($projection)
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






}




?> 