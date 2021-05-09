<?php
include "../../controllers/evenementcontroller.php"; 
include "../../model/evenement.php";

    $evenement1 = new evenement($_POST['idE'],$_POST['placeE'],$_POST['dateE'],$_POST['tempE'],$_POST['typeE'],$_POST['adresseE'],$_POST['nbrE']); 
    $evenement1controller = new evenementcontroller(); 
    $evenement1controller->modifierevenement($evenement1);

?>
