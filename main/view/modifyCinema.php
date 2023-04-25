
<?php
include_once "../controller/cinemaC.php";
$cinemaC = new cinemaC();
$p = $cinemaC->RecupererCinema($_GET['IdCinema']);
if (
   isset($_GET['IdCinema'])&&
   isset($_GET['NomCin'])&&
  isset($_GET['NbrSalleCin'])&&
  isset($_GET['NbrPlaceSalleCin'])&&
  isset($_GET['TempOCinema'])&&
  isset($_GET['TempFCinema'])&&
  isset($_GET['ImageCine']) 
   ) 
   {
        $cinema = new cinema ($_GET['IdCinema'],$_GET['NomCin'],$_GET['NbrSalleCin'],$_GET['NbrPlaceSalleCin'],$_GET['TempOCinema'],$_GET['TempFCinema'], $_GET['ImageCine'] );
        $cinemaC = new cinemaC();
        $cinemaC->ModifierCinema($cinema, $_GET['IdCinema']); 
        //header('location:showCinema.php');
        header('location:showCinema2.php');
        } 
    
 
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Responsive Contact us Form | CodingNepal</title>
      <link rel="stylesheet" href="FormEYA.css">
    
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
    <div class="container">
        <div class="text">Modifier votre cinéma</div>
        <form action="#">

           <div class="form-row">
              <div class="input-data">
                 <input type="number" name="IdCinema" value="<?php echo $p['IdCinema'];?>" required>
                 <div class="underline"></div>
                 <label >Identifiant </label>
              </div>

              <div class="input-data">
                 <input type="text" name="NomCin"  value="<?php echo $p['NomCin'];?>" required>
                 <div class="underline"></div>
                 <label >Nom du Cinéma</label>
              </div>
              <div class="input-data">
               <input type="number"   name="NbrSalleCin"  value="<?php echo $p['NbrSalleCin'];?>" required>
               <div class="underline"></div>
               <label>Nombre de salles</label>
            </div>

           </div>

           <div class="form-row">
              <div class="input-data">
                 <input type="number" name="NbrPlaceSalleCin" value="<?php echo $p['NbrPlaceSalleCin'];?>"  required>
                 <div class="underline"></div>
                 <label >capacité par salle</label>
              </div>
              <div class="input-data">
                 <input type="time" name="TempOCinema" value="<?php echo $p['TempOCinema'];?>"  required>
                 <div class="underline"></div>
                 <label >Temps d'ouverture</label>
              </div>

              <div class="input-data">
               <input type="time" name="TempFCinema"  value="<?php echo $p['TempFCinema'];?>"required>
               <div class="underline"></div>
               <label >Temps de fermeture</label>
              </div>
                </div>
           
                <div class="form-row">
              <div class="input-data ">
                <input type="file" accept="image/*" name="ImageCine"  value="<?php echo $p['ImageCine'];?>" required> 
                <label >Image du cinéma </label>
                 <div class="underline"></div>
                 <!--<label for="">Inserer l'image du cinéma</label> -->

               

                           <!-- <div class="form-row">
                          <div class="input-data textarea">
                            <textarea rows="8" cols="80" required></textarea>
                           <br />
                             <div class="underline"></div>
                            <label for="">Inserer l'image du cinéma</label>

                 <br />  -->
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <!--<input type="submit" value="submit"> --> 
                       <input type="submit" value="Confirmer ">
                       <!--<input type="submit" value="Ajouter ">--> 
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>
   </body>
</html>


 

   </body>
</html>