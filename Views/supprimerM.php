<?php
include_once "../Controller/MatchC.php";
$matchC = new MatchC();
    $matchC->supprimermatch($_GET['id_M']);
    header('location:showevnt.php');

?>