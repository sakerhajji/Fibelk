<?php
include_once "../Controller/pieceC.php";
$pieceC = new pieceC();
    $pieceC->supprimerpiece($_GET['id_p']);
    header('location:listeevent.php');

?>

