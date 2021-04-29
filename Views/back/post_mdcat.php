<?php

include "../../entity/categorie.php";
include "../../controllers/categorieC.php";



if (isset($_POST['id']) && isset($_POST['nom'])) {

    $db = config::getConnexion();

    $req = $db->prepare("UPDATE categorie SET nom=:nom WHERE id=:id");
    $req->bindValue(':id', $_POST['id']);
    $req->bindValue(':nom', $_POST['nom']);
    $req->execute();


    header('Location: mdCategorie.php');
}
