<?php
include "../../controllers/evenementcontroller.php"; 
include "../../model/evenement.php";

    $evenement1 = new evenement($_POST['adresseE']); 
    $evenement1controller = new evenementcontroller(); 
    $evenement1controller->chercherevenement3($evenement1);

?>