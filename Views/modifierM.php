


    <!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>formEVENT</title>
      <link rel="stylesheet" href="FormSOF.css">
    
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <?php
include '../Controller/MatchC.php';
$matchC= new MatchC();
$m=$matchC->recuperermatch($_GET['id_M']);

    if(

      isset($_POST['id_Ma']) 
  ){
    $match = new MatchM ($_POST['id_Ma'],$_POST['nom_Ma'],$_POST['nom_equipe1m'],$_POST['nom_equipe2m'],$_POST['duree_Pm'],$_POST['type_PM'],$_POST['description_MAa'],$_POST['image_Pa'] );
    $matchC= new MatchC();
    $matchC->modifiermatch($match,$_GET['id_M']);
        header('Location:showevnt.php');
 
  }
?>

   <body>
   <div class="container" >
<div class="card" id="pup">
            <div class="text">formulaire à remplir</div>
            <form action="#" method="post">
            <div class="form-row">
                <div class="input-data">
                    <input type="number" name="id_Ma" id='id_Ma' value="<?php echo $m['id_M'];?>">
                    <div class="underline"></div>
                    <label for="">ID  match</label>
                </div>
                <div class="input-data">
                    <input type="text" name="nom_Ma" id='nom_Ma'value="<?php echo $m['nom_M'];?>" required>
                    <div class="underline"></div>
                    <label for="">Nom  match</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="nom_equipe1m" id='nom_equipe1m' value="<?php echo $m['nom_equipe1'];?>"required>
                    <div class="underline"></div>
                    <label for="">nom_equipe1m</label>
                </div>
                <div class="input-data">
                    <input type="text" name="nom_equipe2m" id='nom_equipe2m'value="<?php echo $m['nom_equipe2'];?>" required>
                    <div class="underline"></div>
                    <label for="">nom_equipe2m</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="time" name="duree_Pm" id='duree_Pm' value="<?php echo $m['duree_P'];?>"required>
                    <div class="underline"></div>
                    <label for="">duree</label>
                </div>
                <div class="input-data">
                    <input type="text" name="type_PM" id='type_PM' value="<?php echo $m['type_P'];?>"required>
                    <div class="underline"></div>
                    <label for="">type</label>
                </div>
                </div>
            <div class="form-row">
                <div class="input-data">
                    <input textarea rows="8" cols="80" name="description_MAa" id="description_MAa" value="<?php echo $m['description_P'];?>"required>
                    <div class="underline"></div>
                    <label for="">description</label>
                    </div>
                    <div class="input-data">
                        <input type="file" name="image_Pa" id="image_Pa" value="<?php echo $m['image_P'];?>"required>
                        <div class="underline"></div>
                    </div>
                </div>  
          


                    <div class="form-row submit-btn">
                        <div class="input-data">
                            <div class="inner"></div>
                            <input type="submit" value="submit">
                       
                </div>
            </div>
        </form>
    </div>
    </div>
   </body>
</html>