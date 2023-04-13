<?php
include "../Controller/theatreC.php";
$theatreC = new theatreC();
$list = $theatreC->affichertheatre();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> liste Evenements </title>
 
  <link rel="stylesheet" href="FormSOF.css">
    

</head>
<body>
      <div class="container">
        <div class="text">Liste des theatres</div>
        <form action="#">
           <div class="form-row">

	<section class="List">
		<div class="Tablelist">
			<table class="tableview">
				<tr class="TitleTab">
					<th class="styleth">Id_theatre</th>
					<th class="styleth">Nom</th>
					<th class="styleth">temp d'ouverture</th>
					<th class="styleth">temp de fermeture</th>
					<th class="styleth">capacite</th>
					<th class="styleth">adresse</th>
                    <th class="styleth">photo de theatre</th>
					<th class="styleth">description</th>
                    <th class="styleth">#</th>
					<th class="styleth">#</th>

				</tr>
				<?php
                
        foreach ($list as $theatre) 
        {
        ?>
					<tr>
                        <td class="styleth"><?= $theatre['id_t']; ?></td>
                        <td class="styleth"><?= $theatre['nom_t']; ?></td>
                        <td class="styleth"><?= $theatre['temp_o_t']; ?></td>
                        <td class="styleth"><?= $theatre['temp_f_t']; ?></td>
                        <td class="styleth"><?= $theatre['capacite']; ?></td>
                        <td class="styleth"><?= $theatre['adresse']; ?></td>
                        <td class="styleth"><img src="src/<?= $theatre['image_t']; ?>" height="40px" alt="Image du theatre"></td>
                        <td class="styleth"><?= $theatre['description_t']; ?></td>
                        <td> <a href="supprimertheatre.php?id_t=<?php echo $theatre['id_t']; ?>" class="btn">Supprimer</a></td>
                     <td><a href="modifiertheatre.php?id_t=<?php echo $theatre['id_t']; ?>" class="btn">modifier</a></td>

					</tr>

                    <?php
                           

        }
	

        ?>	
       
            </table>
            </div>
			<div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                      <a href="ajouttheatre.php"> <input type="normal" value="Ajouter" name="Ajouter"></a>
                    </div>
                 </div>
            </section>
        </form>

    </div>
</body>

</html>
