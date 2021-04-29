<?php
include_once "config.php";
class commentairecontroller
{

    function ajouterCommentaire($commentaires)
    {
        $sql = "insert into commentaires (nom,mail,commentaire) values (:nom,:mail,:commentaire)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $nom = $commentaires->getNom();
            $mail = $commentaires->getMail();
            $commentaire = $commentaires->getCommentaire();
           

            $req->bindValue(':nom', $nom);
            $req->bindValue(':mail', $mail);
            $req->bindValue(':commentaire', $commentaire);
            

            $req->execute();
        } catch (Exception $e) {
            die('Erreur' . $e->getMessage());
        }
    }

    function afficherCommentaire()
    {
        $sql = "SELECT * from commentaireS ";
        $db = config::getConnexion();

        try {
            $Com = $db->query($sql);
            return $Com;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function supprimerCommentaire($commentaires)
    {
        $sql = "DELETE from commentaires where  id= :id";
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
        $sql = "SELECT * from commentaires where id= $id ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }
}
