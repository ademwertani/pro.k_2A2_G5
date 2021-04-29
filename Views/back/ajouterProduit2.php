<?php
include "../../controllers/produitC.php"; 
include "../../entity/produit.php";

if (isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['etat']) && isset($_POST['dateFabrication']) &&  isset($_POST['prix'])  && isset($_POST['categorie'])   ) //si le champ nom n'est pas vide
{

    if(!isset($_FILES['image'])) 
    {
        echo "veuillez insérer une image";
        return;
    }


    $images=$_FILES['image']['name']; 
    $tmp_dir=$_FILES['image']['tmp_name'];
    $imageSize=$_FILES['image']['size'];

    $upload_dir =  './uploads/';
    
    
    $imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION)); 
    $valid_extension=array('jpeg', 'jpg', 'png', 'gif', 'pdf');

    $image=rand(1000,1000000).".".$imgExt; 

    move_uploaded_file($tmp_dir, $upload_dir.$image );
    

    $produit1 = new Produit($_POST['nom'],$_POST['description'],$_POST['etat'],$_POST['dateFabrication'],$image,$_POST['categorie'],$_POST['prix']); 
    $produit1C = new ProduitC(); 
    $produit1C->ajouterProduit($produit1);

 
    header('Location: mdProduit.php'); 
}

else 
{
    echo 'verifier les champs';
}
