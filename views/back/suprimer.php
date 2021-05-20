<?php
include "../../controllers/evenementcontroller.php"; 
include "../../entity/evenement.php";

    $evenement1 = new evenement($_POST['idE']); 
    $evenement1controller = new evenementcontroller(); 
    $evenement1controller->suprimerevenement($evenement1);

?>