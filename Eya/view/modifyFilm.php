<?php
include_once "../controller/filmC.php";
$filmC = new filmC();
$p = $filmC->RecupererFilm($_GET['IdFilm']);
if (
   isset($_GET['IdFilm'])&&
   isset($_GET['NomFilm'])&&
  isset($_GET['DureeFilm'])&&
  isset($_GET['TypeFilm'])&&
  isset($_GET['DescriptionFilm'])&&
  isset($_GET['ImageFilm']) 
   ) 
   {
        $film = new film ($_GET['IdFilm'],$_GET['NomFilm'],$_GET['DureeFilm'],$_GET['TypeFilm'],$_GET['DescriptionFilm'], $_GET['ImageFilm'] );
        $filmC = new filmC();
        $filmC->ModifierFilm($film, $_GET['IdFilm']); 
        header('location:showFilm.php');
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
        <div class="text">Modifier votre Film</div>
        <form action="#">

           <div class="form-row">
              <div class="input-data">
                 <input type="number" name="IdFilm" value="<?php echo $p['IdFilm'];?>" required>
                 <div class="underline"></div>
                 <label >Identifiant </label>
              </div>

              <div class="input-data">
                 <input type="text" name="NomFilm"  value="<?php echo $p['NomFilm'];?>" required>
                 <div class="underline"></div>
                 <label >Nom film</label>
              </div>
              <div class="input-data">
               <input type="time"   name="DureeFilm"  value="<?php echo $p['DureeFilm'];?>" required>
               <div class="underline"></div>
               <label>Duree</label>
            </div>

           </div>

           <div class="form-row">

              <div class="input-data">
                 <input type="text" name="TypeFilm" value="<?php echo $p['TypeFilm'];?>"  required>
                 <div class="underline"></div>
                 <label >Type </label>
                 </div>

              <div class="input-data">
                 <input type="text" name="DescriptionFilm" value="<?php echo $p['DescriptionFilm'];?>"  required>
                 <div class="underline"></div>
                 <label >Description</label>
              </div>

              <div class="input-data ">
                <input type="file" accept="image/*" name="ImageFilm"  value="<?php echo $p['ImageFilm'];?>" required> 
                <label >Affiche </label>
                 <div class="underline"></div>
                </div>
           </div>
           
                
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