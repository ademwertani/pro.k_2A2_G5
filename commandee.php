<?php
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
/*function modifiercommande($commande , $Idcommande)
    {
        $sql="UPDATE commande SET Idcommande=:Idcommande, Date=:Date, Prix=:Prix  WHERE Idcommande=:Idcommande";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    try{        
          $Idcommande=commande->get_Idcommande();
          $Date=commande->get_Date();
          $Prix=commande->get_Prix();
         

        $req=$db->prepare($sql);

      $datas = array(':Idcommande'=>$Idcommande, ':Date'=>$Date, ':Prix'=>$Prix );
    
        $req->bindValue(':Idcommande',$Idcommande);
        $req->bindValue(':Date',$Date);
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
        
    }
    public function ajoutercommande($commande)
	{

		$sql="INSERT INTO commande (Idcommande,Date,Prix) values (:Idcommande, :Date,:Prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $Idcommande=commande->get_Idcommande();
        $Date=commande->get_Date();
        $Prix=commande->get_Prix();
        $req->bindValue(':Idcommande',$Idcommande);
        $req->bindValue(':Date',$Date);
        $req->bindValue(':Prix',$Prix);


		
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }} 
        */
		
}
  ?>