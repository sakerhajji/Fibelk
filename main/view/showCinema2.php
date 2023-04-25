<?php
include "../controller/cinemaC.php";
//require '../config.php';
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
			<table border= 2 >
				<tr>
    
    <td>ID cinema</td>
    <td>Nom cinema</td>
    <td>Nbr de salles</td>
    <td>nbr de places/salle</td>
    <td>Ouverture</td>
    <td>fermeture</td>
    <td>Nom fichier</td>
    <td>Image</td>
    <td>Suppression</td>
    <td>Modification</td>
    
					
				</tr>
				<?php 
                $pdo = config::getConnexion();
                $stmt = $pdo->query("SELECT * FROM cinema");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
                ?>
                
         <!-- foreach ($afficheC as $cinema)  IdCinema NomCin NbrSalleCin  NbrPlaceSalleCin TempOCinema 
        {   TempFCinema  ImageCine
        ?> -->
					<tr>
                       
                      <td> <?php echo $row["IdCinema"]; ?> </td>
                      <td> <?php echo $row["NomCin"]; ?> </td>
                      <td> <?php echo $row["NbrSalleCin"]; ?> </td>
                      <td> <?php echo $row["NbrPlaceSalleCin"]; ?> </td>
                      <td> <?php echo $row["TempOCinema"]; ?> </td>
                      <td> <?php echo $row["TempFCinema"]; ?> </td>
                      <td> <?php echo $row["ImageCine"]; ?> </td>
                      <td> <img src="src/<?php echo $row["ImageCine"]; ?>" height="60px" alt="Image du cinema"></td>
                      <td><a href="deleteCinema.php?IdCinema=<?php echo $row["IdCinema"]; ?>" class="btn">Supprimer</a></td>
                      <td><a href="modifyCinema.php?IdCinema=<?php echo $row["IdCinema"]; ?>" class="btn">Modifier</a></td>
                     
                   

					</tr>
                    
          

                    <?php endwhile; 
                           // } ?>	
       </table>
            </div>
            
<div class="form-row submit-btn">
                       <div class="input-data">
                            <div class="inner"></div>
                      <a href="addcinema.php"><input type="normal" value="Ajouter" name="Ajouter"></a>
                       </div>
                    </div>

                    
                 <!-- </div> -->
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

                 




                 </div>
                    



            </section>
        </form>

    
</body>

</html>
