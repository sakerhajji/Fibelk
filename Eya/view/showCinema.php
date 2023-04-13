<?php
include "../controller/cinemaC.php";
$cinemaC = new cinemaC();
$afficheC = $cinemaC->showCinema();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> La liste des cinémas </title>
 
  <link rel="stylesheet" href="FormEYA.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
      <div class="container">
        <div class="text">Liste des cinémas</div>
        <form action="#">
           <div class="form-row">

	<section class="List">
		<div class="Tablelist">
			<table class="tableview">
				<tr class="TitleTab">
					<th class="styleth">Id_Cinéma</th>
					<th class="styleth">Nom cinema</th>
					<th class="styleth">Nombre de salles</th>
					<th class="styleth">Nombre de places/salle</th>
					<th class="styleth">Temps d'ouverture</th>
                    <th class="styleth">Temps de fermeture</th>
                    <th class="styleth">Image</th>
					<th><a class="toggle-edit"><i class="edit-del-icon uil uil-edit"></i></a></th>
					<th><a class="toggle-add"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				</tr>
				<?php
                
        foreach ($afficheC as $cinema) 
        {
        ?>
					<tr>
                        <td class="styleth"><?= $cinema['IdCinema']; ?></td>
                        <td class="styleth"><?= $cinema['NomCin']; ?></td>
                        <td class="styleth"><?= $cinema['NbrSalleCin']; ?></td>
                        <td class="styleth"><?= $cinema['NbrPlaceSalleCin']; ?></td>
                        <td class="styleth"><?= $cinema['TempOCinema']; ?></td>
                        <td class="styleth"><?= $cinema['TempFCinema']; ?></td>

                        <td class="styleth"><img src="src/<?= $cinema['ImageCine']; ?>" height="40px" alt="Image du cinema"></td>
                                                   
                     
                     <td> <a href="deleteCinema.php?IdCinema=<?php echo $cinema['IdCinema']; ?>" class="btn">Supprimer</a></td>
                     <td><a href="modifyCinema.php?IdCinema=<?php echo $cinema['IdCinema']; ?>" class="btn">modifier</a></td>

                     
                    <!-- 

                    <div class="form-row submit-btn">
                       <div class="input-data">
                            <div class="inner"></div>
                      
                       <input type="submit" value="Ajouter ">

                       </div>
                    </div>

                     --> 

					</tr>
          

                    <?php
                           

        }
	

        ?>	
       
            </table>
            </div>



		<!--	<div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                      <a href="addcinema.php"> <input type="normal" value="Ajouter" name="Ajouter"></a>
                      

                    </div>
                 </div>-->



                 <div class="form-row submit-btn">
                       <div class="input-data">
                            <div class="inner"></div>
                      <a href="addcinema.php"><input type="normal" value="Ajouter" name="Ajouter"></a>
                       

                       </div>
                    </div>



            </section>
        </form>

    
</body>

</html>
