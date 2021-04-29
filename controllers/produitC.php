
<?php
include "config.php";

class produitC
{

    function ajouterProduit($produit)
    {
        $sql = "insert into produit (nom,description,etat,dateFabrication,image,prix,categorie) values (:nom,:description,:etat,:dateFabrication,:image,:prix,:categorie)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $nom = $produit->getNom();
            $description = $produit->getDescription();
            $etat = $produit->getetat();
            $dateFabrication = $produit->getDateFabrication();
            $image = $produit->getImage();
            $categorie = $produit->getCategorie();
            $prix = $produit->getprix();

            $req->bindValue(':nom', $nom);
            $req->bindValue(':description', $description);
            $req->bindValue(':etat', $etat);
            $req->bindValue(':dateFabrication',$dateFabrication);
            $req->bindValue(':image', $image);
            $req->bindValue(':categorie', $categorie);
            $req->bindValue(':prix', $prix);

            $req->execute();
        } catch (Exception $e) {
            die('Erreur' . $e->getMessage());
        }
    }

    function afficherproduit()
    {
        
        $sql ="SELECT * FROM  produit ";
        
        $db = config::getConnexion();

        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function affichert()
    {
        
        $sql =" SELECT * FROM `projetweb`.`categorie` WHERE `id` = 1  ";

        
        $db = config::getConnexion();

        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function supprimerproduit($produit)
    {
        $sql = "DELETE from produit where  id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);

        $req->bindValue(':id', $_POST["id"]);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function rechercher($nom) {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'SELECT * FROM produit WHERE nom = :nom'
            );
            $query->execute([
                'nom' => $nom
            ]);
            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


function filtre_prix_produit($min,$max){
    $sql="SELECT * FROM produit WHERE prix BETWEEN  $min AND $max ";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

function trierPr(){
			
    $sql="SElECT * From produit ORDER BY nom DESC";
    $db = config::getConnexion();
    try{ 
        $liste=$db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
function trierPrix(){
			
    $sql="SElECT * From produit ORDER BY prix ASC";
    $db = config::getConnexion();
    try{ 
        $liste=$db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
function trierDate(){
			
    $sql="SElECT * From produit ORDER BY dateFabrication DESC";
    $db = config::getConnexion();
    try{ 
        $liste=$db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}
}
    ?>

