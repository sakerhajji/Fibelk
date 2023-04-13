<?php
include_once "../Controller/lieu_matchC.php";
$lieu_matchC = new lieu_matchC();
    $lieu_matchC->supprimerlieu_match($_GET['id_LM']);
    header('location:afficherlc.php');

?>