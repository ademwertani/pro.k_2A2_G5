<?php
include_once "config.php";


class recettecontroller

{


    function ajouterRecette($recette)
    {
        $sql = "insert into recette (nom,description,image,idc) values (:nom,:description,:image,:idc)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $nom = $recette->getNom();
            $description = $recette->getDescription();
            $image = $recette->getImage();
            $idc = $recette->getIdc();

            $req->bindValue(':nom', $nom);
            $req->bindValue(':description', $description);
            $req->bindValue(':image', $image);
            $req->bindValue(':idc', $idc);

            $req->execute();
        } catch (Exception $e) {
            die('Erreur' . $e->getMessage());
        }
    }

    function afficherRecette()
    {
        $sql = "SELECT * From recette  ";
        $db = config::getConnexion();

        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function affiche()
    {
        $sql="SELECT recette.id, recette.nom, recette.description, recette.image, recette.idc, categorie.nom AS nom_cat
            FROM recette LEFT JOIN categorie
                ON categorie.id = recette.idc";
                        $db = config::getConnexion();

                   $sql=$db->prepare($sql);
                   $sql->execute();
                   $res=$sql->fetchAll();
                   return $res;
                        


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
        $sql ="SELECT recette.id, recette.nom, recette.description, recette.image, recette.idc, categorie.nom AS nom_cat
        FROM recette LEFT JOIN categorie
            ON categorie.id = recette.idc where recette.id= $id ";
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
        $sql = "SELECT recette.id, recette.nom, recette.description, recette.image, recette.idc, categorie.nom AS nom_cat
        FROM recette LEFT JOIN categorie
            ON categorie.id = recette.idc WHERE recette.nom LIKE '$nom'";
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
        $sql = "SELECT recette.id, recette.nom, recette.description, recette.image, recette.idc, categorie.nom AS nom_cat
        FROM recette LEFT JOIN categorie
            ON categorie.id = recette.idc ORDER BY recette.nom ";
        $db  = Config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    
    function triparcategorie($cat)
    {
        $sql = "SELECT recette.id, recette.nom, recette.description, recette.image, recette.idc, categorie.nom AS nom_cat
        FROM recette LEFT JOIN categorie
            ON categorie.id = recette.idc WHERE categorie.nom LIKE '$cat' ";
        $db  = Config::getConnexion();
        try {
            $list = $db->query($sql);
            return $list;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }

    }
	}
