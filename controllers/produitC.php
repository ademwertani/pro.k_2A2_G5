
<?php
include_once "config.php";

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
        
        $sql =" SELECT * from produit    ";
        
        $db = config::getConnexion();

        try {
            $liste = $db->query($sql);
            
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function findById($id)
{
    $sql = "SELECT * from produit where id= $id ";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur :' . $e->getMessage());
    }
}
    
    function filtre_prix_produit1(){
		$sql="SELECT nom,prix,image FROM produit WHERE categorie=1 ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function filtre_prix_produit2(){
		$sql="SELECT nom,prix,image FROM produit WHERE  categorie=2 ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function filtre_prix_produit3(){
		$sql="SELECT nom,prix,image FROM produit WHERE  categorie=3 ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function filtre_prix_produit4(){
		$sql="SELECT nom,prix,image  FROM produit WHERE  categorie=4 ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function filtre_prix_produit5(){
		$sql="SELECT nom,prix,image FROM produit WHERE  categorie=5 ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function getproduitById($id)
    {
    $sql="SELECT * FROM produit where id='$categorie'";
    $db = config::getConnexion();
    try{
        $categorie=$db->query($sql);
        return $categorie->fetch();
        }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
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

