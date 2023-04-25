
<?php 
//include '../controller/cinemaC.php';
include '../controller/cinemaC.php';

 

$error = "";

// create cinema
$cinema = null;

// create an instance of the controller
$cinemaC = new cinemaC();
   if(
   isset($_GET['IdCinema'])&&
   isset($_GET['NomCin'])&&
 isset($_GET['NbrSalleCin'])&&
 isset($_GET['NbrPlaceSalleCin'])&&
 isset($_GET['TempOCinema'])&&
 isset($_GET['TempFCinema'])&&
 isset($_GET['ImageCine'])
) {
   
      echo"hello" ; 
       //$file = $_GET['ImageCine'];
       //if (validerImageCinema($file))
       //{ 

        $cinema = new cinema(
            $_GET['IdCinema'],
            $_GET['NomCin'],
            $_GET['NbrSalleCin'],
            $_GET['NbrPlaceSalleCin'],
           $_GET['TempOCinema'],
            $_GET['TempFCinema'],
           $_GET['ImageCine']
        );
        $cinemaC->ajouterC($cinema);
       // header('Location:showCinema.php');
        header('Location:showCinema2.php');

      //} else { $error = "invalid file type" ; }

   //} else // {
        $error = "Missing information"; }







//include '../model/cinema.php';
//include 'config.php';
//include '../config.php'

 /*$cinemaC=new cinemaC();
$s=0;  
if(isset($_POST['IdCinema'])&&
  isset($_POST['NomCin'])&&
isset($_POST['NbrSalleCin'])&&
isset($_POST['NbrPlaceSalleCin'])&&
isset($_POST['TempOCinema'])&&
isset($_POST['TempFCinema'])&&
isset($_POST['ImageCine'])

)

{
    $cinema=new cinema( 
      $_POST['IdCinema'],
    $_POST['NomCin'],
    $_POST['NbrSalleCin'],
    $_POST['NbrPlaceSalleCin'],
    $_POST['TempOCinema'],
    $_POST['TempFCinema'],
    $_POST['ImageCine'],
    
  );
 $s=1;

if($s==1)
{
$cinemaC->ajouterC($cinema);
       // echo "<script>alert('Vous avez ajouter un user');</script>";
        //echo "<script> window.location.href='index.php'</script>";
}

}*/
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Responsive Contact us Form | CodingNepal</title>
      
      <link rel="stylesheet" href= "FormEya.css">
    
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <script>
    
  </script>

   </head>
   <body>
    <div class="container">
        <div class="text">Ajouter votre propre Cinéma</div>
        <form action="#"  >
       <!-- <form action="#" onsubmit="return verifierNom(this.NomCin.value);" > -->
           <div class="form-row">
              <div class="input-data">
                 <input type="number" name="IdCinema">
                 <div class="underline"></div>
                 <label >Identifiant du Cinéma </label>
              </div> 

              <div class="input-data">
                  
                <!--  <input type="text" name="NomCin"   required onkeyup= "CinemanameValidation()"class= "form-control"/> 
                 <span id="erreur1" ></span> 
                 <div class="underline"></div> 

                 <label >Nom du Cinéma</label> --> 

                   <input type="text" name="NomCin"   required onkeyup= "OkNomCinema()"/> 
                  <div class="underline"></div>  
                 <label >Nom du Cinéma</label>  

                 <!--  <input type="text" name="NomCin" required >
                 <div class="underline"></div>
                 <label >Nom Cinema </label> --> 

              </div>




              <div class="input-data">
               <input type="number"   name="NbrSalleCin"required>
               <div class="underline"></div>
               <label>Nombre total des salles</label>
            </div>

           </div>

           <div class="form-row">
              <div class="input-data">
                 <input type="number" name="NbrPlaceSalleCin" required>
                 <div class="underline"></div>
                 <label >Nombre de places par salle</label>
              </div>
              <div class="input-data">
                 <input type="time" name="TempOCinema"  required>
                 <div class="underline"></div>
                 <label >Temps d'ouverture</label>
              </div>

              <div class="input-data">
               <input type="time" name="TempFCinema" required>
               <div class="underline"></div>
               <label >Temps de fermeture</label>
              </div>
                </div>
           
                <div class="form-row">
              <div class="input-data ">
                
               <input type="file"  name="ImageCine" required> 
                <!-- <input type="file" accept="image/*" name="ImageCine" required>  -->
                <label > </label>
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
                       <input type="submit" value="Ajouter ">

                       </div>

                       <div class="input-data">
                            <div class="inner"></div>
                      <!-- <a href="showCinema.php"><input type="normal" value="Consulter" name="Consulter"></a> -->
                      <a href="showCinema2.php"><input type="normal" value="Consulter" name="Consulter"></a>
                 </div>



                 
               </div>
           </div>
        </form>
     
    </div>
    
   </body>
</html>


 
<script src="eya.js" ></script> 
   </body>
</html>