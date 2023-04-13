<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>formREALISATION</title>
      <link rel="stylesheet" href="FormSOF.css">
    
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
   <?php
include_once "../Controller/realiserC.php";
$realiserC = new realiserC();
$p = $realiserC->recupererrealiser($_GET['id_t']);
if (
    isset($_GET['identifiant_e'])&&isset($_GET['identifiant_t']) 
   ) 
   {
        $realiser = new realiser ($_GET['identifiant_e'],$_GET['identifiant_t'],$_GET['date'],$_GET['heure_d'],$_GET['prix'] );
        $realiserC = new realiserC();
        $realiserC->modifierrealiser($realiser, $_GET['id_p']);
        header('location:listerealiser.php');
        } 
    
 
?>

    <div class="container">
        <div class="text">l'événement realiser</div>
        <form action="#">
           <div class="form-row">
           <div class="input-data">
                 <input type="text" id="identifiant_e" name="identifiant_e" value="<?php echo $p['id_p'];?>"required>
                 <div class="underline"></div>
                 <label for="">identifiant de l'événement</label>
              </div>
              <div class="input-data">
                 <input type="text" id="identifiant_t" name="identifiant_t" value="<?php echo $p['id_t'];?>" required>
                 <div class="underline"></div>
                 <label for="">identifiant du théatre</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 <input type="date" id="date" name="date" value="<?php echo $p['date_de_realisation'];?>" required>
                 <div class="underline"></div>
                 <!-- date de réalisation-->
              </div>
              <div class="input-data">
               <input type="time" id="heure_d" name="heure_d" value="<?php echo $p['heure_p'];?>"required>
               <div class="underline"></div>
               <label for="">Heure de début</label>
            </div>
           </div>
           <div class="form-row">
            <div class="input-data">
               <input type="number" id="prix" name="prix" value="<?php echo $p['prix_p'];?>"required>
               <div class="underline"></div>
               <label for="">Prix de l'événement</label>
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