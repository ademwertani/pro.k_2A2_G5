<?php
include "../../controllers/recettecontroller.php"; 
include "../../entity/recette.php";

if (isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['categorie']) ) //si le champ nom n'est pas vide
{

    if(!isset($_FILES['image'])) {
        echo "no picture found lol";
        return;
    }


    $images=$_FILES['image']['name']; 
    $tmp_dir=$_FILES['image']['tmp_name'];
    $imageSize=$_FILES['image']['size'];

    $upload_dir =  './uploads/';
    
    //this is kinda nonsense
    $imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION)); 
    $valid_extension=array('jpeg', 'jpg', 'png', 'gif', 'pdf');

    $image=rand(1000,1000000).".".$imgExt; 

    move_uploaded_file($tmp_dir, $upload_dir.$image );
    

    $recette1 = new recette($_POST['nom'],$_POST['description'],$image,$_POST['categorie']); 
    $recette1controller = new recettecontroller(); 
    $recette1controller->ajouterRecette($recette1);

    header('Location: mdRecipe.php'); // baed maysir l'ajout iaawed iraj3ek el nafs el page  
}
else 
{
    echo 'verifier les champs';
}
