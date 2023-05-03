<?php
include_once "../Controller/lieu_concertC.php";
$lieu_concertC = new lieu_concertC();
    $lieu_concertC->supprimerlieu_concert($_GET['id_LC']);
    header('location:showevnt.php');

?>