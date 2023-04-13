<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" name="nom" placeholder="Entrer votre nom">
        <input type="text" name="prenom" placeholder="Entrer votre prenom" >
        <input type="text" name="addresse" placeholder="Entrer votre adresse">
        <input type="date" name="date" placeholder="Entrer votre date de naissance">
        <input type="password" name="pass" placeholder="Entrer votre mot de pass">
        <input type="submit" value="Save">
    </form>
</body>
</html>
<?php
include '../Controller/userc.php';
$pc = new Userc();
  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $c = new User ($_POST['nom'], $_POST['prenom'], $_POST['addresse'], $_POST['date'] ,$_POST['pass'] );
    
        $pc->addUser($c);

        header('Location:ListUser.php');
        
    
}

?>