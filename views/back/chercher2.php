<?php
include "../../controllers/evenementcontroller.php"; 
include "../../model/evenement.php";

    $evenement1 = new evenement($_POST['placeE']); 
    $evenement1controller = new evenementcontroller(); 
    $evenement1controller->chercherevenement2($evenement1);

?>