<?php
include '../controller/filmC.php';
$filmC=new filmC();
$filmC->SupprimerFilm($_GET["IdFilm"]);
header('location:showFilm.php');//bech nbqach nmchy f page vide (yaamel supprision w yarjaae directement ll page )
?> 