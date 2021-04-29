<?php
include_once "config.php";

class recettecontroller
{

    function ajouterRecette($recette)
    {
        $sql = "insert into recette (nom,description,image,categorie) values (:nom,:description,:image,:categorie)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $nom = $recette->getNom();
            $description = $recette->getDescription();
            $image = $recette->getImage();
            $categorie = $recette->getCategorie();

            $req->bindValue(':nom', $nom);
            $req->bindValue(':description', $description);
            $req->bindValue(':image', $image);
            $req->bindValue(':categorie', $categorie);

            $req->execute();
        } catch (Exception $e) {
            die('Erreur' . $e->getMessage());
        }
    }

    function afficherRecette()
    {
        $sql = "SELECT * From recette ";
        $db = config::getConnexion();

        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function supprimerRecette($recette)
    {
        $sql = "DELETE from recette where  id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);

        $req->bindValue(':id', $_POST["id"]);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function findById($id)
    {
        $sql = "SELECT * from recette where id= $id ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }
    
    function search($nom)
    {
        $sql = "SELECT * From recette WHERE nom LIKE '$nom'";
        $db  = Config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function triparnom()
    {
        $sql = "SElECT * From recette ORDER BY nom ";
        $db  = Config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
	}
