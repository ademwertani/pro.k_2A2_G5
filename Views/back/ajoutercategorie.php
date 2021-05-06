<?php
include "../../controllers/categorieC.php"; 
include "../../entity/categorie.php";

if (isset($_POST['nom'])) //si le champ nom n'est pas vide
{

   
    $categorie1 = new categorie($_POST['nom']); 
    $categorie1controller = new categorieC(); 
    $categorie1controller->ajoutercategorie($categorie1);
    

    header('Location: mdCategorie.php'); 
    
}
else {
    echo'verifier les champs';
     }
?>