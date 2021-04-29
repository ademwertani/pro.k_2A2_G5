<?php

include "../../entity/produit.php";
include "../../controllers/produitC.php";

if (isset($_POST['nom'])  && isset($_POST['description']) && isset($_POST['etat']) && isset($_POST['dateFabrication']) && isset($_POST['prix']) && isset($_POST['categorie'])) //si le champ nom n'est pas vide
{

    if (!isset($_FILES['image'])) {
        echo "no picture found lol";
        return;
    }

    $images = $_FILES['image']['name'];
    $tmp_dir = $_FILES['image']['tmp_name'];
    $imageSize = $_FILES['image']['size'];

    $upload_dir =  './uploads/';

    //this is kinda nonsense
    $imgExt = strtolower(pathinfo($images, PATHINFO_EXTENSION));
    $valid_extension = array('jpeg', 'jpg', 'png', 'gif', 'pdf');
    $image = rand(1000, 1000000) . "." . $imgExt;

    move_uploaded_file($tmp_dir, $upload_dir . $image);

    $db = config::getConnexion();


    $req = $db->prepare("UPDATE produit SET nom=:nom, description=:description, etat=:etat , dateFabrication=:dateFabrication, image=:image, categorie=:categorie, prix=:prix  WHERE id=:id");
    $req->bindValue(':id', $_POST['id']);
    $req->bindValue(':nom', $_POST['nom']);
    $req->bindValue(':description', $_POST['description']);
    $req->bindValue(':etat', $_POST['etat']);
    $req->bindValue(':dateFabrication', $_POST['dateFabrication']);
    $req->bindValue(':prix', $_POST['prix']);
    $req->bindValue(':image', $image);
    $req->bindValue(':categorie', $_POST['categorie']);


    $req->execute();


    header('Location: mdProduit.php');
}
