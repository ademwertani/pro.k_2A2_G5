<?PHP
include_once "C:/xampp/htdocs/pro.k/config.php";
class packet_bd {
    
    public function getproduitByTitle($name) 
    {
		$sql = "SELECT * FROM pack where ReferencePack='$name'";
		$db = config::getConnexion();
		try {
            $req = $db->prepare($sql);
			$req->execute();
		
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    }
      
    public function triproduitd() 
    { 
       
        $sql= "SELECT * FROM pack order by prix ASC "; 
		$db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }

	}
        
    
    public function triproduitda() 
    { 
       
        $sql= "SELECT * FROM pack order by prix DESC "; 
		$db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }

	}
        
       

	
	function ajouterpack($packet){
		$sql="insert INTO pack (ReferencePack,identifiantpack,Datedebutpack,Datefinpack,prix,image) values (:ReferencePack,:identifiantpack,:Datedebutpack,:Datefinpack,:prix,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $ReferencePack=$packet->getReferencePack();
        $identifiantpack=$packet->getidentifiantpack();
        $Datedebutpack=$packet->getDatedebutpack();
        $Datefinpack=$packet->getDatefinpack();
		$prix=$packet->getprix();
        $image=$packet->getimage();
		$req->bindValue(':ReferencePack',$ReferencePack);
		$req->bindValue(':identifiantpack',$identifiantpack);
		$req->bindValue(':Datedebutpack',$Datedebutpack);
		$req->bindValue(':Datefinpack',$Datefinpack);
		$req->bindValue(':prix',$prix);
        $req->bindValue(':image',$image);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherPack()
	{ 
       
        $sql= "SELECT * From pack "; 
		$db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }

	}
	function SupprimerPack($id)
	{
		$sql = "DELETE FROM pack where identifiantpack='$id'";
		$db = config::getConnexion();
		try {
            $req = $db->prepare($sql);
			$req->execute();
		
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    }

    
    public function recherchepack($id) 
    {
        $sql="SELECT * FROM pack where identifiantpack='$id'";
        $db = config::getConnexion();
        try{
            $promotion=$db->query($sql);
            return $promotion->fetch();
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            }
        }          
        
     
	function modifierpack($packet,$id){

        $sql="UPDATE pack SET Datedebutpack=:Datedebutpack,Datefinpack=:Datefinpack,prix=:prix WHERE identifiantpack='$id'";

		$db = config::getConnexion();
        try{
    
            $req=$db->prepare($sql);
            
            
            $Datedebutpack=$packet->getDatedebutpack();
      
            $Datefinpack=$packet->getDatefinpack();
            
            $prix=$packet->getprix();
        
            $req->bindValue(':Datedebutpack',$Datedebutpack);
            $req->bindValue(':Datefinpack',$Datefinpack);
            $req->bindValue(':prix',$prix);
          
                  
            $req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
        }
        
    }
   
    
    function getpackById($idPromotion)
 {
 $sql="SELECT * FROM pack where identifiantpack='$idPromotion'";
 $db = config::getConnexion();
 try{
     $promotion=$db->query($sql);
     return $promotion->fetch();
     }
 catch (Exception $e){
     die('Erreur: '.$e->getMessage());
     }
 }

}
?>