<?php
include_once "../Controller/realiserC.php";
$realiserC = new realiserC();
    $realiserC->supprimerrealiser($_GET['id_t']);
    header('location:listerealiser.php');

?>

