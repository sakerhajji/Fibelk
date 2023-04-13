<?php
include "../Controller/lieu_matchC.php";
$lieu_matchC = new lieu_matchC();
$list = $lieu_matchC->afficherlieu_match();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> liste Evenements </title>

    <link rel="stylesheet" href="FormSOF.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="container">
        <div class="text">Liste des Evenements</div>
        <form action="#">
            <div class="form-row">

                <section class="List">
                    <div class="Tablelist">
                        <table class="tableview">
                            <tr class="TitleTab">
                                <th class="styleth">id_LM</th>
                                <th class="styleth">nom_LM</th>
                                <th class="styleth">adresse</th>
                                <th class="styleth">temp_o</th>
                                <th class="styleth">temp_f</th>
                                <th class="styleth">capacite</th>
                                <th class="styleth">image_T</th>
                                <th class="styleth">description</th>

                            </tr>
                            <?php
                
        foreach ($list as $lieu_match) 
        {
        ?>
                            <tr>
                                <td class="styleth"><?= $lieu_match['id_LM']; ?></td>
                                <td class="styleth"><?= $lieu_match['nom_LM']; ?></td>
                                <td class="styleth"><?= $lieu_match['adresse']; ?></td>
                                <td class="styleth"><?= $lieu_match['temp_o']; ?></td>
                                <td class="styleth"><?= $lieu_match['temp_f']; ?></td>
                                <td class="styleth"><?= $lieu_match['capacite']; ?></td>
                                <td class="styleth"><img src="src/<?= $lieu_match['image_T']; ?>" height="40px" alt="image_T d'evenement"></td>
                                <td class="styleth"><?= $lieu_match['description']; ?></td>

                                <td> <a href="supprimerlc.php?id_LM=<?php echo $lieu_match['id_LM']; ?>"
                                        class="btn">Supprimer</a></td>
                                <td><a href="modifierlc.php?id_LM=<?php echo $lieu_match['id_LM']; ?>"
                                        class="btn">modifier</a></td>


                            </tr>

                            <?php
                           

        }
	

        ?>

                        </table>
                    </div>
        <div class="form-row">
			<div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                      <a href="ajouterlc.php"> <input type="normal" value="Ajouter" name="Ajouter"></a>
                    </div>
                 </div>
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                      <a href="add_event.php"> <input type="normal" value="Retour" ></a>
                    </div>
                 </div>


                 </div>                    </div>
                </section>
        </form>


</body>

</html>