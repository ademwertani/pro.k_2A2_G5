<?php
include "../../controllers/evenementcontroller.php"; 
include "../../entity/evenement.php";

    $evenement1 = new evenement($_POST['placeE']); 
    $evenement1controller = new evenementcontroller(); 
    $evenement1controller->chercherevenement2($evenement1);

?>