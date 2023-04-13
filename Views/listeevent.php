<?php
include "../Controller/pieceC.php";
$pieceC = new pieceC();
$list = $pieceC->afficherpiece();
?>

<!DOCTYPE html>
<html lang="en" >
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
					<th class="styleth">Id_event</th>
					<th class="styleth">Nom</th>
					<th class="styleth">Duree</th>
					<th class="styleth">Type</th>
					<th class="styleth">Description</th>
					<th class="styleth">Photo</th>
          <th class="styleth">#</th>
					<th class="styleth">#</th>

				</tr>
				<?php
                
        foreach ($list as $piece) 
        {
        ?>
					<tr>
                        <td class="styleth"><?= $piece['id_p']; ?></td>
                        <td class="styleth"><?= $piece['nom_p']; ?></td>
                        <td class="styleth"><?= $piece['duree_p']; ?></td>
                        <td class="styleth"><?= $piece['type_p']; ?></td>
                        <td class="styleth"><?= $piece['description_p']; ?></td>
                        <td class="styleth"><img src="src/<?= $piece['image_p']; ?>" height="40px" alt="Image d'evenement"></td>
                                                   
                        <td> <a href="supprimerpiece.php?id_p=<?php echo $piece['id_p']; ?>" class="btn">Supprimer</a></td>
                     <td><a href="modifierpiece.php?id_p=<?php echo $piece['id_p']; ?>" class="btn">modifier</a></td>

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
                      <a href="ajoutpiece.php"> <input type="normal" value="Ajouter" name="Ajouter"></a>
                    </div>
                 </div>
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                      <a href="add_event.php"> <input type="normal" value="Retour" ></a>
                    </div>
                 </div>


                 </div>

            </section>
        </form>

    
</body>

</html>
