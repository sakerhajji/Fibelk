<?php
include_once "../Controller/theatreC.php";
$theatreC = new theatreC();
    $theatreC->supprimertheatre($_GET['id_t']);
    header('location:listetheatre.php');

?>

