<?php
include '../controller/cinemaC.php';
$cinemaC=new cinemaC();
$cinemaC->SupprimerCinema($_GET["IdCinema"]);
//header('location:showCinema.php');//bech nbqach nmchy f page vide (yaamel supprision w yarjaae directement ll page )
header('location:showCinema2.php');//bech nbqach nmchy f page vide (yaamel supprision w yarjaae directement ll page )

?> 