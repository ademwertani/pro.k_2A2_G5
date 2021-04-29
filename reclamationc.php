<?php
require_once 'config.php';
require_once 'reclamationc.php';

class reclamationc{
    public function afficherreclamation()
    {
        try {
        $pdo = getConnexion();
        $query = $pdo->prepare('SELECT * FROM reclamation');
        $query->execute();
        return $query->fetchAll();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    }

    
    

    function modifieretat($reclamation,$idc)
    {
        $sql="UPDATE reclamation SET idc=:idc, nomc=:nomc, emailc=:emailc ,sujetrec=:sujetrec , messagerec=:messagerec,etatrec=:etatrec WHERE idc=:idc";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    try{        
          $idc=$reclamation->get_idc();
          $nomc=$reclamation->get_nomc();
          $emailc=$reclamation->get_emailc();
          $sujetrec=$reclamation->get_sujetrec();
          $messagerec=$reclamation->get_messagerec();
          $etatrec=$reclamation->get_etatrec();

        $req=$db->prepare($sql);

      $datas = array(':idc'=>$idc, ':nomc'=>$nomc, ':emailc'=>$emailc,'sujetrec'=>$sujetrec,':messagerec'=>$messagerec,'etatrec'=>$etatrec);
    
        $req->bindValue(':idc',$idc);
        $req->bindValue(':nomc',$nomc);
        $req->bindValue(':emailc',$emailc);
        $req->bindValue(':sujetrec',$sujetrec);
        $req->bindValue(':messagerec',$messagerec);
        $req->bindValue(':etatrec',$etatrec);

        


        
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
    public function ajouterreclamation($reclamation)
	{

		$sql="INSERT INTO reclamation (idc,nomc,emailc,sujetrec,messagerec,etatrec) values (:idc, :nomc,:emailc,:sujetrec,:messagerec,:etatrec)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idc=$reclamation->get_idc();
        $nomc=$reclamation->get_nomc();
        $emailc=$reclamation->get_emailc();
        $sujetrec=$reclamation->get_sujetrec();
        $messagerec=$reclamation->get_messagerec();
        $etatrec=$reclamation->get_etatrec();
        $req->bindValue(':idc',$idc);
        $req->bindValue(':nomc',$nomc);
        $req->bindValue(':emailc',$emailc);
        $req->bindValue(':sujetrec',$sujetrec);
        $req->bindValue(':messagerec',$messagerec);
        $req->bindValue(':etatrec',$etatrec);


		
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }}
		
}
























?>