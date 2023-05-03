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
include_once "../Controller/lieu_matchC.php";
$lieu_matchC = new lieu_matchC();
$p = $lieu_matchC->recupererlieu_match($_GET['id_LM']);
if (
    isset($_POST['id_LM'])
  
   ) 
   {   
     $lieu_match = new lieu_match ($_POST['id_LM'],$_POST['nom'],$_POST['temp_o'],$_POST['temp_f'],$_POST['capacite'],$_POST['adresse'],$_POST['photo'],$_POST['description'] );
        $lieu_matchC = new lieu_matchC();
        $lieu_matchC->modifierlieu_match($lieu_match, $_GET['id_LM']);
        header('location:showevnt.php');
      } 
    
 
?>           

         <div class="container">
        <div class="text">Lieu de l'événement</div>
        <form action="#"method="post">
           <div class="form-row">
           <div class="input-data"style="display:none;">
                 <input type="text" id="id_LM"  name="id_LM" value="<?php echo $p['id_LM'];?>"  >
                 <div class="underline"></div>
                 <label for="">id LM</label>
              </div>

           <div class="input-data">
                 <input type="text" id="nom"  name="nom" value="<?php echo $p['nom_LM'];?>" required>
                 <div class="underline"></div>
                 <label for="">Nom du LM</label>
              </div>
              <div class="input-data">
                 <input type="number" id="capacite" name="capacite" value="<?php echo $p['capacite_M'];?>" required>
                 <div class="underline"></div>
                 <label for="">Capacité</label>
              </div>
           </div>
           <div class="form-row">
           <div class="input-data">
               <input type="text" id="adresse" name="adresse"  value="<?php echo $p['adresse_M'];?>" required>
               <div class="underline"></div>
               <label for="">Adresse</label>
            </div>
              <div class="input-data">
                 <input type="file" id="photo" name="photo" value="<?php echo $p['image_T'];?>" accept="image/*" >
                 <div class="underline"></div>
                 <!--photo de l'évenement-->
               </div>
           </div>
         <div class="form-row">
            <div class="input-data">
               <input type="time" id="temp_o" name="temp_o"   value="<?php echo $p['temp_O_T'];?>" required>
               <div class="underline"></div>
               <label for="">Temp de l'ouverture</label>
            </div>
            <div class="input-data">
               <input type="time" id="temp_f" name="temp_f" value="<?php echo $p['temp_F_T'];?>" required>
               <div class="underline"></div>
               <label for="">Temp de fermeture</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input textarea id="description" name="description" value="<?php echo $p['description_M'];?>" required>
               <div class="underline"></div>
               <label for="">Déscription</label>
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