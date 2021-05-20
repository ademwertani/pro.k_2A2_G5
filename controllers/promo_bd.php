<?PHP
include_once "C:/xampp/htdocs/pro.k/config.php";
class promotion_bd {
    
	
	function ajouterpromotion($promotion){
		$sql="insert INTO promo (Reference,id,date_debut,date_fin,pourcentage,identifiantpack) values (:Reference ,:id ,:date_debut ,:date_fin ,:pourcentage,:identifiantpack)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Reference=$promotion->getReference();
        $id=$promotion->getid();
        $date_debut=$promotion->getdate_debut();
        $date_fin=$promotion->getdate_fin();
		$pourcentage=$promotion->getpourcentage();
        $identifiantpack=$promotion->getidentifiantpack();
      
		
		$req->bindValue(':Reference',$Reference);
		$req->bindValue(':id',$id);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);
		$req->bindValue(':pourcentage',$pourcentage);
        $req->bindValue(':identifiantpack',$identifiantpack);
       
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherPromotions()
	{ 
       
        $sql= "SELECT * From promo "; 
		$db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }

	}
	function SupprimerPromotion($id)
	{
		$sql = "DELETE FROM promo where id='$id'";
		$db = config::getConnexion();
		try {
            $req = $db->prepare($sql);
			$req->execute();
		
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    }

    function recherchePromotion($id){
        $sql="SELECT * FROM promo where id='$id'";
		$db = config::getConnexion();
        try{
            $Produit=$db->query($sql);
            return $Produit;
        }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
    }

	function modifierpromotion($promotion,$id){

        $sql="UPDATE promo SET date_debut=:date_debut,date_fin=:date_fin,pourcentage=:pourcentage WHERE id='$id'";

		$db = config::getConnexion();
        try{
    
            $req=$db->prepare($sql);
            
            
            $date_debut=$promotion->getdate_debut();
      
            $date_fin=$promotion->getdate_fin();
            
            $pourcentage=$promotion->getpourcentage();
        
            $req->bindValue(':date_debut',$date_debut);
            $req->bindValue(':date_fin',$date_fin);
            $req->bindValue(':pourcentage',$pourcentage);
          
                  
            $req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
        }
        
    }
    public function getproduitById($id) {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                'SELECT * FROM promo WHERE identifiantpack  = :id'
            );
            $query->execute([
                'identifiantpack' => $id
            ]);
            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

   

}
?>