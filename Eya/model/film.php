<?php

   class film {
      private  $IdFilm;
      private  $NomFilm;
      private  $DureeFilm;
      private  $TypeFilm;
      private  $DescriptionFilm;
      private  $ImageFilm;
      
      
      
      function __construct($IdFilm,$NomFilm,$DureeFilm,$TypeFilm ,$DescriptionFilm,$ImageFilm){
         $this->IdFilm=$IdFilm;
         $this->NomFilm=$NomFilm;
         $this->DureeFilm=$DureeFilm ; 
         $this->TypeFilm=$TypeFilm;
         $this->DescriptionFilm=$DescriptionFilm;
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
          return $this->DescriptionFilm;
      }
      public function getImageFilm()
      {
          return $this->ImageFilm;
      }
  

      
      
   }
   
      
?>