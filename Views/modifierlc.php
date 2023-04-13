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
include_once "../Controller/lieu_concertC.php";
$lieu_concertC = new lieu_concertC();
$p = $lieu_concertC->recupererlieu_concert($_GET['ID']);
if (
    isset($_GET['ID']) &&
    isset($_GET['nom']) &&
    isset($_GET['description']) 
   ) 
   {
        $lieu_concert = new lieu_concert ($_GET['ID'],$_GET['nom'],$_GET['adresse'],$_GET['temp_o'],$_GET['temp_f'],$_GET['capacite'],$_GET['image'] ,$_GET['description']  );
        $lieu_concertC = new lieu_concertC();
        $lieu_concertC->modifierlieu_concert($lieu_concert, $_GET['ID']);
        header('location:afficherlc.php');
        } 
    
 
?>
    <div class="container">
        <div class="text">modifier l'évenement</div>
        <form action="#">
            <div class="form-row">
                <div class="input-data">
                    <input type="text" id="ID" name="ID" value="<?php echo $p['ID'];?>" required>
                    <div class="underline"></div>
                    <label for="">identifiant de lieu_concert</label>
                </div>
                <div class="input-data">
                    <input type="text" id="nom" name="nom" value="<?php echo $p['nom'];?>" required>
                    <div class="underline"></div>
                    <label for="">Nom de de lieu_concert</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" id="adresse" name="adresse" value="<?php echo $p['adresse'];?>" required>
                    <div class="underline"></div>
                    <label for="">adresse de lieu_concert</label>
                </div>
                <div class="input-data">
                    <input type="time" id="temp_o" name="temp_o" value="<?php echo $p['temp_o'];?>" required>
                    <div class="underline"></div>
                    <label for="">temp d'ouverture de lieu_concert</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="time" id="temp_f" name="temp_f" value="<?php echo $p['temp_f'];?>" required>
                    <div class="underline"></div>
                    <label for="">temp de fermeture de lieu_concert</label>
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
                    <input type="file" id="image" name="image" value="<?php echo $p['image'];?>" required>
                    <div class="underline"></div>
                    <!--photo de l'évenement-->
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