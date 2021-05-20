<?php
include "../../controllers/participationcontroller.php"; 
include "../../entity/participation.php";

    //$participation1 = new participation($_POST['idE']); 
    //$participation1controller = new participationcontroller(); 
    //$participation1controller->ajouterparticipation($participation1);
    $id =   $_REQUEST['idE'];
    $part = $_REQUEST['adresseE']; 
    $partcontroller = new participationcontroller();
    $partcontroller->mailparticipation($part,$id);

?>