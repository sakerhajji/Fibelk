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
include_once "../Controller/theatreC.php";
$theatreC = new theatreC();
$p = $theatreC->recuperertheatre($_GET['id_t']);
if (
    isset($_GET['identifiant_t'])
  
   ) 
   {
        $theatre = new theatre ($_GET['identifiant_t'],$_GET['nom'],$_GET['description'],$_GET['capacite'],$_GET['photo'],$_GET['adresse'],$_GET['temp_o'],$_GET['temp_f'] );
        $theatreC = new theatreC();
        $theatreC->modifiertheatre($theatre, $_GET['id_t']);
        header('location:listetheatre.php');
        } 
    
 
?>
    <div class="container">
        <div class="text">Modifier le Lieu</div>
        <form action="#">
           <div class="form-row">
              <div class="input-data">
                 <input type="text" id="identifiant_t" name="identifiant_t" value="<?php echo $p['id_t'];?>" required>
                 <div class="underline"></div>
                 <label for="">identifiant du théatre</label>
              </div>
              <div class="input-data">
                 <input type="text" id="nom"  name="nom" value="<?php echo $p['nom_t'];?>" required>
                 <div class="underline"></div>
                 <label for="">Nom du théatre</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 <input type="number" id="capacite" name="capacite" value="<?php echo $p['capacite'];?>" required>
                 <div class="underline"></div>
                 <label for="">Capacité</label>
              </div>
              <div class="input-data">
                 <input type="file" id="photo" name="photo" accept="image/*" value="<?php echo $p['image_t'];?>" required>
                 <div class="underline"></div>
                 <!--photo de l'évenement-->
               </div>
           </div>
           <div class="form-row">
            <div class="input-data">
               <input textarea id="description" name="description" value="<?php echo $p['description_t'];?>" required>
               <div class="underline"></div>
               <label for="">Déscription</label>
            </div>
            <div class="input-data">
               <input type="text" id="adresse" name="adresse" value="<?php echo $p['adresse'];?>" required>
               <div class="underline"></div>
               <label for="">Adresse</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="time" id="temp_o" name="temp_o" value="<?php echo $p['temp_o_t'];?>" required>
               <div class="underline"></div>
               <label for="">Temp de l'ouverture</label>
            </div>
            <div class="input-data">
               <input type="time" id="temp_f" name="temp_f" value="<?php echo $p['temp_f_t'];?>" required>
               <div class="underline"></div>
               <label for="">Temp de fermeture</label>
            </div>
         </div>
           
                 <br />
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="Modifier">
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>
 
   </body>
</html>