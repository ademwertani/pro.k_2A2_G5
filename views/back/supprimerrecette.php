<?php 
include "../../controllers/recettecontroller.php"; 

$recettec = new recettecontroller(); 

if (isset($_POST["id"]))
{
    $recettec->supprimerRecette($_POST["id"]); 
    header('Location: mdRecipe.php');
}
