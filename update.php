<?php

include '../Controller/userC.php';

$UserC = new UserC();
$UserC = new UserC();
if (
    isset($_POST["idAC"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["date"])&&
    isset($_POST["pass"]) 

) {
    if (
        !empty($_POST["idAC"]) &&
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"])&&
        !empty($_POST["date"]) &&
        !empty($_POST["pass"])
    ) {
      $User = new User ($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['date'] ,$_POST['pass'] );
        $UserC->updateUser($_POST["idAC"] , $User );
      header('Location:index.php');
    }
   }
   $Usercc = new Userc();
   if (isset($_GET['idAC']))
$p = $Usercc->getUserById($_GET['idAC']);
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Update</title>
      <link rel="stylesheet" href="FormSOF.css">
    
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
		<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<h1>Upadte Account</h1><br>
         <input type="text"  name="idAC"   value="<?php echo $p['idAC'];?>"  /> <br>
			<input type="text"  name="nom"   value="<?php echo $p['nom'];?>"  /> <br>
			<input type="text"  name="prenom"   value="<?php echo $p['prenom'];?>"  /> <br>
			<input type="email" name="email"   value="<?php echo $p['email'];?>"  /><br>
         <input type="date"  name="date"   value="<?php echo $p['date'];?>"  /><br>
			<input type="text" name="pass"   value="<?php echo $p['pass'];?>"   /> <br>
			<button>Update</button>
		</form>
    
   </body>
</html>

