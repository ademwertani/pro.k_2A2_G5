<?php
include_once '../../config.php';
include_once '../../controllers/reclamationc.php';

class reclamationc{
    public function afficherreclamation()
    {
        try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare('SELECT * FROM reclamation');
        $query->execute();
        return $query->fetchAll();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    }

    
    

    
    public function ajouterreclamation($reclamation)
    {

        $sql="INSERT INTO reclamation ( nomc,emailc,sujetrec,messagerec,iduser) 
            VALUES (:nomc, :emailc, :sujetrec, :messagerec, :iduser)";
                            $db = config::getConnexion();

            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'nomc' => $reclamation->get_nomc(),
                    'emailc' => $reclamation->get_emailc(),
                    'sujetrec' => $reclamation->get_sujetrec(),
                    'messagerec' => $reclamation->get_messagerec(),
                    'iduser' => $reclamation->get_iduser(),


                ]);


        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    public function modifier($etatrec, $idrec) {
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'UPDATE reclamation SET 
                   etatrec=:etatrec 
                   WHERE idrec= :idrec'
            );

            $query->execute([
                'etatrec' => $etatrec,
                'idrec'=>$idrec
            ]);

            echo $query->rowCount() . " records UPDATED successfully";
        } catch (PDOException $e) {
            echo "erreur";
            $e->getMessage();
        }
    }
    public function recupereretat($idrec) {
        try {
             $pdo = config::getConnexion();
             $query = $pdo->prepare(
                 'SELECT * FROM reclamation WHERE idrec= :idrec'
             );
             $query->execute([
                 'idrec' => $idrec
             ]);
             return $query->fetch();
         } catch (PDOException $e) {
             $e->getMessage();
         }
     }


    








}