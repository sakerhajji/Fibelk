<?php

   class film {
      private  $IdFilm;
      private  $NomFilm;
      private  $DureeFilm;
      private  $TypeFilm;
      private  $descriptionFilm;
      private  $ImageFilm;
      
      
      
      function __construct($IdFilm,$NomFilm,$DureeFilm,$TypeFilm ,$descriptionFilm,$ImageFilm){
         $this->IdFilm=$IdFilm;
         $this->NomFilm=$NomFilm;
         $this->DureeFilm=$DureeFilm ; 
         $this->TypeFilm=$TypeFilm;
         $this->descriptionFilm=$descriptionFilm;
         $this->ImageFilm=$ImageFilm;
      }
      
      public function getIdFilm()
      {
          return $this->IdFilm;
      }


      public function getNomFilm()
      {
          return $this->NomFilm;
      }

      public function getDureeFilm()
      {
        return $this->DureeFilm;
      }
      
      
      public function getTypeFilm()
      {
          return $this->TypeFilm;
      }   
     
      public function getDescriptionFilm()
      {
          return $this->descriptionFilm;
      }
      public function getImageFilm()
      {
          return $this->ImageFilm;
      }
  

      
      
   }
   
      
?>