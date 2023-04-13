<?php

   class cinema { 
      private  $IdCinema;
      private  $NomCin;
      private  $NbrSalleCin;
      private  $NbrPlaceSalleCin; // nombre de places par salle
      private  $TempOCinema;
      private  $TempFCinema;
      private  $ImageCine;
      
      
      
      
      function __construct($IdCinema,$NomCin,$NbrSalleCin,$NbrPlaceSalleCin,$TempOCinema,$TempFCinema,$ImageCinema){
         $this->IdCinema=$IdCinema;
         $this->NomCin=$NomCin;
         $this->NbrSalleCin=$NbrSalleCin;
         $this->NbrPlaceSalleCin=$NbrPlaceSalleCin;
         $this->TempOCinema=$TempOCinema;
         $this->TempFCinema=$TempFCinema;
         $this->ImageCine=$ImageCinema;
        
      }
      
      public function getIdCinema()
      {
          return $this->IdCinema;
      }


      public function getNomCinema()
      {
          return $this->NomCin;
      }
    
      public function getNbrSalleCin()
      {
        return $this->NbrSalleCin;
      }

      public function getNbrPlaceSalleCin()
      {
        return $this->NbrPlaceSalleCin;
      }



     
      public function getTempOCinema()
      {
          return $this->TempOCinema;
      }


      public function getTempFCinema()
      {
          return $this->TempFCinema;
      }


     
      public function getImageCinema()
      {
          return $this->ImageCine;
      }
      
  

      
      
   }
   
      
?>