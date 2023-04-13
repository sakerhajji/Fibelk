<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>formEVENT</title>
      <link rel="stylesheet" href="FormSOF.css">
    
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script language="javascript">

function alpha(ch)
{r=true;
for(i=0;i<ch.length;i++)
if((ch.charAt(i).toUpperCase()<'A')||(ch.charAt(i).toUpperCase()>'Z'))
r=false;return r;}
function verif()
{n=f.nom.value;
if((m="")||(alpha(m)==false))
{alert("nom incorrect");return false;}



}
</script>

   </head>
   <body>
   <?php
include '../Controller/pieceC.php';


$pieceC = new pieceC();
 
    if(

      isset($_GET['identifiant_e'])&&isset($_GET['nom'])
      &&isset($_GET['description']) 
  ){
    $piece = new piece ($_GET['identifiant_e'],$_GET['nom'],$_GET['description'],$_GET['duree'],$_GET['photo'],$_GET['type_e'] );
 
        $pieceC->ajouterpiece($piece);
        header('Location:index.php');
 
  }

 
?>

    <div class="container">
        <div class="text">Créer votre propre evenement</div>
        <form action="#" name="f">
           <div class="form-row">
              <div class="input-data">
                 <input type="text" id="identifiant_e" name="identifiant_e" required>
                 <div class="underline"></div>
                 <label for="">identifiant de l'événement</label>
              </div>
              <div class="input-data">
                 <input type="text" id="nom"  name="nom" required>
                 <div class="underline"></div>
                 <label for="">Nom de l'événement</label>
              </div>
           </div>
           <div class="form-row">
           <div class="input-data">
               <input textarea id="description" name="description" required>
               <div class="underline"></div>
               <label for="">Déscription</label>
            </div>
              <div class="input-data">
                 <input type="file" id="photo" accept="image/*" name="photo"  required>
                 <div class="underline"></div>
                 <!--photo de l'évenement-->
               </div>
           </div>
           <div class="form-row">
            <div class="input-data">
               <input type="time" id="duree" name="duree" required>
               <div class="underline"></div>
               <label for="">Durée</label>
            </div>
            <div class="input-data">
            <input type="text" id="type_e" name="type_e" required>
                 <div class="underline"></div>
                 <label for="">type de l'événement</label>
              </div>
         </div>
           
                 <br />
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="submit" onclick="verif()">
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>
   </body>
</html>