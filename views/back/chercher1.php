<?php
include "../../controllers/evenementcontroller.php"; 
include "../../entity/evenement.php";

    $evenement1 = new evenement($_POST['idE']); 
    $evenement1controller = new evenementcontroller(); 
    $evenement1controller->chercherevenement1($evenement1);

?>