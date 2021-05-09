<?php
include "../../controllers/evenementcontroller.php"; 
include "../../model/evenement.php";

    $evenement1 = new evenement($_POST['idE']); 
    $evenement1controller = new evenementcontroller(); 
    $evenement1controller->chercherevenement1($evenement1);

?>