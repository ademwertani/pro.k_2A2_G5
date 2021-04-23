<?php
include "../../controllers/categoriecontroller.php"; 
include "../../entity/categorie.php";

if (isset($_POST['nom'])) //si le champ nom n'est pas vide
{

    $categorie1 = new categorie($_POST['nom']); 
    $categorie1controller = new categoriecontroller(); 
    $categorie1controller->ajoutercategorie($categorie1);
    

    header('Location: mdCategorie.php'); //yaani baed maysir l'ajout iaawed iraj3ek el nafs el page
    
}
else {
    echo'verifier les champs';
     }
