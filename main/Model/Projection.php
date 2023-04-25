<?php
include '../model/cinema.php';
include '../model/film.php';


class projection 
{
  private $idFilm;
  private  $idCinema;
  private  $idAC;
  private  $DateProj;
  private  $HeureDebP;
  private  $NumSalle;
  private  $Option3D; 


  function __construct($idFilm, $idCinema,$idAC,$DateProj,$HeureDebP,$NumSalle,$Option3D)
  { 
    $this->idFilm= $idFilm;
    $this->idCinema=$idCinema;
    $this->idAC=$idAC;
    $this->DateProj=$DateProj;
    $this->HeureDebP=$HeureDebP;
    $this->NumSalle=$NumSalle;
    $this->Option3D=$Option3D;

  }

  public function getIdFilm()
  {
      return $this->IdFilm;
  }
  public function getIdCinema()
  {
      return $this->IdCinema;
  }

  

      public function getIdAcount()
      { 
        return $this->idAC;
      }
public function getDateProj()
{ return $this->DateProj ; }

public function getHeureDeb()
{ return $this->HeureDebP ;}

public function getNumSalle()
{ return $this->NumSalle;}

public function getOption3D()
{ return $this->Option3D ; }







}




















?>