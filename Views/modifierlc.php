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
include_once "../Controller/lieu_matchC.php";
$lieu_matchC = new lieu_matchC();
$p = $lieu_matchC->recupererlieu_match($_GET['id_LM']);
if (
    isset($_GET['id_LM']) &&
    isset($_GET['nom_LM']) &&
    isset($_GET['description']) 
   ) 
   {
        $lieu_match = new lieu_match ($_GET['id_LM'],$_GET['nom_LM'],$_GET['adresse'],$_GET['temp_o'],$_GET['temp_f'],$_GET['capacite'],$_GET['image_T'] ,$_GET['description']  );
        $lieu_matchC = new lieu_matchC();
        $lieu_matchC->modifierlieu_match($lieu_match, $_GET['id_LM']);
        header('location:afficherlc.php');
        } 
    
 
?>
    <div class="container">
        <div class="text">modifier l'évenement</div>
        <form action="#">
            <div class="form-row">
                <div class="input-data">
                    <input type="text" id="id_LM" name="id_LM" value="<?php echo $p['id_LM'];?>" required>
                    <div class="underline"></div>
                    <label for="">identifiant de lieu_match</label>
                </div>
                <div class="input-data">
                    <input type="text" id="nom_LM" name="nom_LM" value="<?php echo $p['nom_LM'];?>" required>
                    <div class="underline"></div>
                    <label for="">Nom de de lieu_match</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" id="adresse" name="adresse" value="<?php echo $p['adresse'];?>" required>
                    <div class="underline"></div>
                    <label for="">adresse de lieu_match</label>
                </div>
                <div class="input-data">
                    <input type="time" id="temp_o" name="temp_o" value="<?php echo $p['temp_o'];?>" required>
                    <div class="underline"></div>
                    <label for="">temp d'ouverture de lieu_match</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="time" id="temp_f" name="temp_f" value="<?php echo $p['temp_f'];?>" required>
                    <div class="underline"></div>
                    <label for="">temp de fermeture de lieu_match</label>
                </div>
                <div class="input-data">
                    <input type="number" id="capacite" name="capacite" value="<?php echo $p['capacite'];?>" required>
                    <div class="underline"></div>
                    <label for="">capacite de lieu_concert</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input textarea id="description" name="description" value="<?php echo $p['description'];?>"
                        required>
                    <div class="underline"></div>
                    <label for="">Déscription</label>
                </div>
                <div class="input-data">
                    <input type="file" id="image_T" name="image_T" value="<?php echo $p['image_T'];?>" required>
                    <div class="underline"></div>
                    <!--photo de l'évenement-->
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