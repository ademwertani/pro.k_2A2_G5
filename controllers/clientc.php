<?PHP
	include_once "../../config.php";
    include_once "../../controllers/clientc.php";

	class clientc {

        public function ajouterclient($client){
            $sql="INSERT INTO client (nom, prenom, mailclient, tel, adresse, motdepasse ) 
			VALUES (:nom,:prenom,:mailclient, :tel, :adresse, :motdepasse )";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'nom' => $client->get_nom(),
                    'prenom' => $client->get_prenom(),
                    'mailclient' => $client->get_mailclient(),
                    'tel' => $client->get_tel(),
                    'adresse' => $client->get_adresse(),
                    'motdepasse' => $client->get_motdepasse()
					
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }



        function afficherclient(){
			
			$sql="SELECT * FROM client";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

        function display(){

            $sql="SELECT * FROM client where idc=idc";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

		function supprimerclient($idc){
			$sql="DELETE FROM client WHERE idc= :idc";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idc',$idc);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierclient($client, $idc){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE client SET 
						nom = :nom, 
						prenom = :prenom,
						mailclient = :mailclient,
						tel = :tel,
						adresse = :adresse,
						motdepasse = :motdepasse
					WHERE idc = :idc'
				);
				$query->execute([
					'nom' => $client->get_nom(),
					'prenom' => $client->get_prenom(),
                    'mailclient' => $client->get_mailclient(),
					'tel' => $client->get_tel(),
					'adresse' => $client->get_adresse(),
					'motdepasse' => $client->get_motdepasse(),
					'idc' => $idc
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererclient($idc){
			$sql="SELECT * from client where id=$idc";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
        
		function recupererclient1($idc){
			$sql="SELECT * from client where idc=$idc";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		public function getclientByIdc($idc) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM client WHERE idc = :idc'
                );
                $query->execute([
                    'idc' => $idc
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


        
        public function getclientBymail($mailclient) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM client WHERE mailclient = :mailclient'
                );
                $query->execute([
                    'mailclient' => $mailclient
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

		function connexionUser($mailclient,$motdepasse){
            $sql="SELECT * FROM client WHERE mailclient='" . $email . "' and motdepasse = '". $motdepasse."'";
            $db = config::getConnexion();
            $x=null;
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0) {
                   // $message = "pseudo ou le mot de passe est incorrect";
                } else {
                    $x=$query->fetch();
                    //$message = $x['role'];
                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
            }
          return $x;
        }
		public function tria(){

            $sql="SELECT * FROM client ORDER BY nom ";
            $db =config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        } 
    
    
        public function trid(){
    
            $sql="SELECT * FROM client ORDER BY nom desc";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        
	}
?>