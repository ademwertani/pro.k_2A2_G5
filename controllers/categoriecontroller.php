<?php
include "config.php";

class categoriecontroller
{

    function ajoutercategorie($categorie)
    {
        $sql = "insert into categorie (nom) values (:nom)";

        $db = config::getConnexion();

        try {
            $req = $db->prepare($sql);
            $nom = $categorie->getNom();

            $req->bindValue(':nom', $nom);

            $req->execute();
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }
    }

    //function afficherCategorie()
    function afficherCategorie()
    {
        $sql = "SELECT * from categorie ";
        $db = config::getConnexion();

        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    //function modifierCategorie()
    function modifierCategorie($categorie, $id)
    {
        $sql = "UPDATE categorie SET nom =:nom WHERE id=:id";
        $db = config::getConnexion();

        try {
            $id = $categorie->getId();
            $nom = $categorie->getNom();

            $req = $db->prepare($sql);

            $datas = array(':id' => $id, ':nom' => $nom);

            $req->bindValue(':id', $id);
            $req->bindValue(':nom', $nom); //god

            $res = $req->execute();
        } catch (Exception $e) {
            echo "Erreur " . $e->getMessage();
            echo "datas: ";
            print_r($datas);
        }
    }


    //function supprimerCategorie()

    function supprimerCategorie($categorie)
    {
        $sql = "DELETE from categorie where  id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);

        $req->bindValue(':id', $_POST["id"]);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    //recupererby id()

    function RecuperatebyId($id)
    {
        $sql = "SELECT * from categorie where id= $id ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }
    //function rechercherCategorie()
    //function TriCategorieById()
    //function TriCategorieByNom()

}
