<?php 
include "../../controllers/categoriecontroller.php"; 

$categoriec = new categoriecontroller(); 

if (isset($_POST["id"]))
{
    $categoriec->supprimerCategorie($_POST["id"]); 
    header('Location: mdCategorie.php');
}
