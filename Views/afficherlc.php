<?php
include "../Controller/lieu_concertC.php";
$lieu_concertC = new lieu_concertC();
$list = $lieu_concertC->afficherlieu_concert();
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
                                <th class="styleth">Id</th>
                                <th class="styleth">Nom</th>
                                <th class="styleth">adresse</th>
                                <th class="styleth">temp_o</th>
                                <th class="styleth">temp_f</th>
                                <th class="styleth">capacite</th>
                                <th class="styleth">image</th>
                                <th class="styleth">description</th>

                            </tr>
                            <?php
                
        foreach ($list as $lieu_concert) 
        {
        ?>
                            <tr>
                                <td class="styleth"><?= $lieu_concert['ID']; ?></td>
                                <td class="styleth"><?= $lieu_concert['nom']; ?></td>
                                <td class="styleth"><?= $lieu_concert['adresse']; ?></td>
                                <td class="styleth"><?= $lieu_concert['temp_o']; ?></td>
                                <td class="styleth"><?= $lieu_concert['temp_f']; ?></td>
                                <td class="styleth"><?= $lieu_concert['capacite']; ?></td>
                                <td class="styleth"><?= $lieu_concert['image']; ?></td>
                                <td class="styleth"><?= $lieu_concert['description']; ?></td>
                                <td class="styleth"><img src="src/<?= $lieu_concert['image']; ?>" height="40px"
                                        alt="Image d'evenement"></td>

                                <td> <a href="supprimerlc.php?ID=<?php echo $lieu_concert['ID']; ?>"
                                        class="btn">Supprimer</a></td>
                                <td><a href="modifierlc.php?ID=<?php echo $lieu_concert['ID']; ?>"
                                        class="btn">modifier</a></td>


                            </tr>

                            <?php
                           

        }
	

        ?>

                        </table>
                    </div>
                    <div class="form-row submit-btn">
                        <div class="input-data">
                            <div class="inner"></div>
                            <a href="ajouterlc.php"> <input type="normal" value="Ajouter" name="Ajouter"></a>
                        </div>
                    </div>
                </section>
        </form>


</body>

</html>