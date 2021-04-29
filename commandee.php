
require_once 'config.php';
require_once 'commande.php';
class commandee {
    public function affichercommande()
    {
        try {
        $pdo = getConnexion();
        $query = $pdo->prepare('SELECT * FROM commande');
        $query->execute();
        return $query->fetchAll();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    } 
   public function ajoutercommande($commande)
    {

        $sql="INSERT INTO commande (Daate,Prix) 
            VALUES (:Daate,:Prix)";
                            $db = getConnexion();

            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'Daate' => $commande->get_Date(),
                    'Prix' => $commande->get_Prix()
                ]);


        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    public function supprimercommande($Idcommande){
        $sql="DELETE FROM commande where Idcommande= :Idcommande";
        $db = getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':Idcommande',$Idcommande);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    public function modifier($commande,$Idcommande) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE commande SET Daate = :Daate, Prix = :Prix WHERE Idcommande= :Idcommande'
                );
                $query->execute([
                    'Daate' => $commande->get_Date(),
                    'Prix' => $commande->get_Prix()
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function getcomById($Idcommande) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM commande WHERE Idcommande = :Idcommande'
                );
                $query->execute([
                    'Idcommande' => $Idcommande
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
}
    /*
   public function modifiercommande($commande , $Idcommande)
    {
        $sql="UPDATE commande SET Idcommande=:Idcommande, Daate=:Daate, Prix=:Prix  WHERE Idcommande=:Idcommande";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    try{        
          $Idcommande= commande.get_Idcommande();
          $Daate= commande.get_Daate();
          $Prix= commande.get_Prix();
         

        $req=$db->prepare($sql);

      $datas = array(':Idcommande'=>$Idcommande, ':Daate'=>$Daate, ':Prix'=>$Prix );
    
        $req->bindValue(':Idcommande',$Idcommande);
        $req->bindValue(':Daate',$Daate);
        $req->bindValue(':Prix',$Prix);


        


        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
          echo " Les datas : " ;
        print_r($datas);
        }
        
    } /*
    public function ajoutercommande($commande)
	{

		$sql="INSERT INTO commande (Idcommande,Daate,Prix) values (:Idcommande, :Daate,:Prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $Idcommande=commande->get_Idcommande();
        $Daate=commande->get_Daate();
        $Prix=commande->get_Prix();
        $req->bindValue(':Idcommande',$Idcommande);
        $req->bindValue(':Daate',$Daate);
        $req->bindValue(':Prix',$Prix);


		
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }} 
        */
		
 
  ?>
