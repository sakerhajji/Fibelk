<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>formTHEATRE</title>
      <link rel="stylesheet" href="FormSOF.css">
    
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
   <?php
   include '../Controller/theatreC.php';
   $theatreC = new theatreC();

  if( isset($_GET['identifiant_t'])  ) 
{

      $theatre = new theatre ($_GET['identifiant_t'],$_GET['nom'],$_GET['description'],$_GET['capacite'],$_GET['photo'],$_GET['adresse'],$_GET['temp_o'],$_GET['temp_f'] );
      $theatreC->ajoutertheatre($theatre);
      header('Location:Listetheatre.php');

}
  ?>
    <div class="container">
        <div class="text">Lieu de l'événement</div>
        <form action="#">
           <div class="form-row">
              <div class="input-data">
                 <input type="text" id="identifiant_t" name="identifiant_t" required>
                 <div class="underline"></div>
                 <label for="">identifiant du théatre</label>
              </div>
              <div class="input-data">
                 <input type="text" id="nom"  name="nom" required>
                 <div class="underline"></div>
                 <label for="">Nom du théatre</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 <input type="number" id="capacite" name="capacite" required>
                 <div class="underline"></div>
                 <label for="">Capacité</label>
              </div>
              <div class="input-data">
                 <input type="file" id="photo" name="photo" accept="image/*" >
                 <div class="underline"></div>
                 <!--photo de l'évenement-->
               </div>
           </div>
           <div class="form-row">
            <div class="input-data">
               <input textarea id="description" name="description" required>
               <div class="underline"></div>
               <label for="">Déscription</label>
            </div>
            <div class="input-data">
               <input type="text" id="adresse" name="adresse" required>
               <div class="underline"></div>
               <label for="">Adresse</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="time" id="temp_o" name="temp_o" required>
               <div class="underline"></div>
               <label for="">Temp de l'ouverture</label>
            </div>
            <div class="input-data">
               <input type="time" id="temp_f" name="temp_f" required>
               <div class="underline"></div>
               <label for="">Temp de fermeture</label>
            </div>
         </div>
           
                 <br />
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="submit">
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>
 
   </body>
</html>