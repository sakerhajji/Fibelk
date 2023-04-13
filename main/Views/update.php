

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>formEVENT</title>
      <link rel="stylesheet" href="FormSOF.css">
    
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
   <?php
include_once "../Controller/pieceC.php";
$pieceC = new pieceC();
$p = $pieceC->recupererpiece($_GET['id_p']);
if (
    isset($_GET['identifiant_e']) &&
    isset($_GET['nom']) &&
    isset($_GET['description']) 
   ) 
   {
    
       
        $piece = new piece ($_GET['identifiant_e'],$_GET['nom'],$_GET['description'],$_GET['duree'],$_GET['photo'],$_GET['type_e'] );
        $pieceC = new pieceC();
        $pieceC->modifierpiece($piece, $_GET['id_p']);
        header('location:listeevent.php');
        } 
    
 
?>
    <div class="container">
        <div class="text">modifier l'évenement</div>
        <form action="#">
           <div class="form-row">
              <div class="input-data">
                 <input type="text" id="identifiant_e" name="identifiant_e" value="<?php echo $p['id_p'];?>" required >
                 <div class="underline"></div>
                 <label for="">identifiant de l'événement</label>
              </div>
              <div class="input-data">
                 <input type="text" id="nom"  name="nom" value="<?php echo $p['nom_p'];?>" required>
                 <div class="underline"></div>
                 <label for="">Nom de l'événement</label>
              </div>
           </div>
           <div class="form-row">
           <div class="input-data">
               <input textarea id="description" name="description" value="<?php echo $p['description_p'];?>"required>
               <div class="underline"></div>
               <label for="">Déscription</label>
            </div>
              <div class="input-data">
                 <input type="file" id="photo" name="photo" value="<?php echo $p['image_p'];?>" required>
                 <div class="underline"></div>
                 <!--photo de l'évenement-->
               </div>
           </div>
           <div class="form-row">
            <div class="input-data">
               <input type="time" id="duree" name="duree" value="<?php echo $p['duree_p'];?>" required>
               <div class="underline"></div>
               <label for="">Durée</label>
            </div>
            <div class="input-data">
            <input type="text" id="type_e" name="type_e" value="<?php echo $p['type_p'];?>"required>
                 <div class="underline"></div>
                 <label for="">type de l'événement</label>
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