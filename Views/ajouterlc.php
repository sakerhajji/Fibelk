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
include '../Controller/lieu_concertC.php';


$lieu_concertC = new lieu_concertC();
 
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    if(

      isset($_GET['ID'])&&isset($_GET['nom'])
      &&isset($_GET['description']) 
  ){
    $lieu_concert = new lieu_concert ($_GET['ID'],$_GET['nom'],$_GET['adresse'],$_GET['temp_o'],$_GET['temp_f'],$_GET['capacite'],$_GET['image'],$_GET['description'] );
 
        $lieu_concertC->ajouterlieu_concert($lieu_concert);
        header('Location:afficherlc.php');
 
  }

 
?>

    <div class="container">

        <div class="text">formulaire à remplir</div>
        <form action="#">
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="ID" id='ID' required>
                    <!--fi kol input hot name o id kima esemi base-->
                    <div class="underline"></div>
                    <label for="">ID lieu concert</label>
                </div>
                <div class="input-data">
                    <input type="text" name="nom" id='nom' required>
                    <div class="underline"></div>
                    <label for="">Nom lieu concert</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="adresse" id='adresse' required>
                    <div class="underline"></div>
                    <label for="">Adresse</label>
                </div>
                <div class="input-data">
                    <input type="number" name="capacite" id='capacite' required>
                    <div class="underline"></div>
                    <label for="">capacite</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <br>
                    <input type="time" name="temp_o" id='temp_o' required>
                    <br>
                    <div class="underline"></div>

                    <label for="">temp d'ouverture</label>
                </div>
                <div class="input-data">
                    <br>
                    <input type="time" name="temp_f" id='temp_f' required>
                    <div class="underline"></div>
                    <label for="">temp de fermeture</label>
                </div>
                <div class="input-data">
                    <div class="image">
                        <br>
                        <input type="file" name="image" id="image" required>
                        <div class="underline"></div>
                        <label for="image">ajouter</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data textarea">
                    <textarea rows="8" cols="80" name="description" id="description" required></textarea>
                    <br />
                    <div class="underline"></div>
                    <label for="">description</label>
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