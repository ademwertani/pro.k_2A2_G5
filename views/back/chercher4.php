<?php
include "../../controllers/evenementcontroller.php"; 
include "../../model/evenement.php";

    $evenement1 = new evenement($_POST['adresseE']); 
    $evenement1controller = new evenementcontroller(); 
    $evenement1controller->chercherparticipant4($evenement1);

?>