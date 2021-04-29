<?php 
include "../../controllers/commentairecontroller.php";


$commentaire1 = new commentairecontroller();

if (isset($_POST["id"]))
{
    $commentaire1->supprimercommentaire($_POST["id"]); 
    header('Location: rdreviews.php');
}

