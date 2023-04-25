
<?php 

include '../controller/filmC.php';


$error = "";

// create cinema
$film = null;

// create an instance of the controller
$filmC = new filmC();
   if(
      isset($_GET['IdFilm'])&&
   isset($_GET['NomFilm'])&&
 isset($_GET['DureeFilm'])&&
 isset($_GET['TypeFilm'])&&
 isset($_GET['DescriptionFilm'])&&
 isset($_GET['ImageFilm'])

) {
   
      echo"hello" ; 
        $film = new film(
            $_GET['IdFilm'],
            $_GET['NomFilm'],
            $_GET['DureeFilm'],
            $_GET['TypeFilm'],
           $_GET['DescriptionFilm'],
            $_GET['ImageFilm']
          
        );
        $filmC->ajouterFilm($film);
        header('Location:showFilm.php');
    } else
        $error = "Missing information";







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
      <link rel="stylesheet" href="FormEYA.css">
    
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
    <div class="container">
        <div class="text">Ajouter votre propre Film</div>
        <form action="#">

           <div class="form-row">
              <div class="input-data">
                 <input type="number" name="IdFilm" >
                 <div class="underline"></div>
                 <label >Identifiant  </label>
              </div> 

              <div class="input-data">
                 <input type="text" name="NomFilm" required>
                 <div class="underline"></div>
                 <label >Nom du Film</label>
              </div>


              <div class="input-data">
               <input type="time"   name="DureeFilm"required>
               <div class="underline"></div>
               <label>Duree</label>

            </div>

           </div>

           <div class="form-row">
              <div class="input-data">
                 <input type="text" name="TypeFilm" required>
                 <div class="underline"></div>
                 <label >Type Film</label>
              </div>
              
              <div class="input-data">
                 <input type="text" name="DescriptionFilm"  required>
                 <div class="underline"></div>
                 <label > Description </label>
              </div>

              <div class="input-data ">
                <input type="file" accept="image/*" name="ImageFilm" required> 
                <label >Affiche </label>
                 <div class="underline"></div>


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
                       <input type="submit" value="Ajouter ">

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