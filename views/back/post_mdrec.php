<?php


include "../../entity/recette.php";
include "../../controllers/recettecontroller.php";

if (isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['idc'])) //si le champ nom n'est pas vide
{

    if (!isset($_FILES['image'])) {
        echo "no picture found lol";
        return;
    }

    $images = $_FILES['image']['name'];
    $tmp_dir = $_FILES['image']['tmp_name'];
    $imageSize = $_FILES['image']['size'];

    $upload_dir =  './uploads/';

   
    $imgExt = strtolower(pathinfo($images, PATHINFO_EXTENSION));
    $valid_extension = array('jpeg', 'jpg', 'png', 'gif', 'pdf');
    $image = rand(1000, 1000000) . "." . $imgExt;

    move_uploaded_file($tmp_dir, $upload_dir . $image);

    $db = config::getConnexion();


    $req = $db->prepare("UPDATE recette SET nom=:nom, description=:description, image=:image, idc=:idc  WHERE id=:id");
    $req->bindValue(':id', $_POST['id']);
    $req->bindValue(':nom', $_POST['nom']);
    $req->bindValue(':description', $_POST['description']);
    $req->bindValue(':image', $image);
    $req->bindValue(':idc', $_POST['idc']);


    $req->execute();


    header('Location: mdRecipe.php');
}
