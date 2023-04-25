<?php
include "../controller/filmC.php";
$filmC = new filmC();
$afficheF = $filmC->showFilm();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> la liste des films </title>
  
  <link rel="stylesheet" href="FormEYA.css">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
      <div class="container">
        <div class="text">Liste des films</div>
        <form action="#">
           <div class="form-row">

	<section class="List">
		<div class="Tablelist">
			<table class="tableview">
				<tr class="TitleTab">
					<th class="styleth">Identifiant</th>
					<th class="styleth">Nom Film</th>
					<th class="styleth">Duree</th>
					<th class="styleth">Type</th>
					<th class="styleth">Description</th>
                    <th class="styleth">Affiche</th>
					<th><a class="toggle-edit"><i class="edit-del-icon uil uil-edit"></i></a></th>
					<th><a class="toggle-add"><i class="edit-del-icon uil uil-book-medical"></i></a></th>
				</tr>
				<?php
                
        foreach ($afficheF as $film) 
        {
        ?>
					<tr>
                        <td class="styleth"><?= $film['IdFilm']; ?></td>
                        <td class="styleth"><?= $film['NomFilm']; ?></td>
                        <td class="styleth"><?= $film['DureeFilm']; ?></td>
                        <td class="styleth"><?= $film['TypeFilm']; ?></td>
                        <td class="styleth"><?= $film['descriptionFilm']; ?></td> 
                        <td class="styleth"><img src="src/<?= $film['ImageFilm']; ?>" height="40px" alt="Affiche du film"></td>
                                                   
                     
                    
                        <td> <a href="deleteFilm.php?IdFilm=<?php echo $film['IdFilm']; ?>" class="btn">Supprimer</a></td>
                     <td><a href="modifyFilm.php?IdFilm=<?php echo $film['IdFilm']; ?>" class="btn">modifier</a></td>
                     
                    

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
                      <a href="addFilm.php"><input type="normal" value="Ajouter" name="Ajouter"></a>
                       </div>
                </div>


                       <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                      <a href="add_event.php"> <input type="normal" value="Retour" ></a>
                    </div>
                 </div>

                 

                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                      <a href="index.php"> <input type="normal" value="Acceuil" ></a>
                    </div>
                 </div> 




                    



            </section>
        </form>

    
</body>

</html>
