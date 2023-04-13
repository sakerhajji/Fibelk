<?php
include "../Controller/realiserC.php";
$realiserC = new realiserC();
$list = $realiserC->afficherrealiser();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> liste Realisations </title>
 
  <link rel="stylesheet" href="FormSOF.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
      <div class="container">
        <div class="text">Liste des realisations</div>
        <form action="#">
           <div class="form-row">

	<section class="List">
		<div class="Tablelist">
			<table class="tableview">
				<tr class="TitleTab">
					<th class="styleth">Id_event</th>
					<th class="styleth">Id_theatre</th>
					<th class="styleth">date de realisation</th>
					<th class="styleth">Heure de l'evenement</th>
					<th class="styleth">prix de l'evenement</th>
                    <th class="styleth">#</th>
					<th class="styleth">#</th>

				</tr>
				<?php
                
        foreach ($list as $realiser) 
        {
        ?>
					<tr>
                        <td class="styleth"><?= $realiser['id_t']; ?></td>
                        <td class="styleth"><?= $realiser['id_p']; ?></td>
                        <td class="styleth"><?= $realiser['date_de_realisation']; ?></td>
                        <td class="styleth"><?= $realiser['heure_p']; ?></td>
                        <td class="styleth"><?= $realiser['prix_p']; ?></td>                                                   
                        <td> <a href="supprimerreal.php?id_t=<?php echo $realiser['id_t']; ?> " class="btn">Supprimer</a></td>
                     <td><a href="modifierreal.php?id_t=<?php echo $realiser['id_t'];  ?>" class="btn">modifier</a></td>

					</tr>

                    <?php
                           

        }
	

        ?>	
       
            </table>
            </div>
			<div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                      <a href="ajoutreal.php"> <input type="normal" value="Ajouter" name="Ajouter"></a>
                    </div>
                 </div>
            </section>
        </form>

    
</body>

</html>
