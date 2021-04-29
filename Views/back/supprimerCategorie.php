<?php 
include "../../controllers/categorieC.php"; 

$categoriec = new categorieC(); 

if (isset($_POST["id"]))
{
    $categoriec->supprimerCategorie($_POST["id"]); 
    header('Location: mdCategorie.php');
}
