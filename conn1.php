<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=test;port=3306;charset=utf8", 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    echo 'Erreur de connexion: ' . $e->getMessage();
}




if(isset($_POST['idE']) && isset($_POST['placeE']) && isset($_POST['dateE']) && isset($_POST['tempE']) && isset($_POST['typeE']) && isset($_POST['adresseE'])){
    if(!empty($_POST['idE']) && !empty($_POST['placeE']) && !empty($_POST['dateE']) && !empty($_POST['tempE']) && !empty($_POST['typeE']) && !empty($_POST['adresseE'])){
				
		 		$id = htmlspecialchars($_POST['idE']);
		 		$place = htmlspecialchars($_POST['placeE']);
		 		$date = htmlspecialchars($_POST['dateE']);
		 		$temp = htmlspecialchars($_POST['tempE']);
                 $type = htmlspecialchars($_POST['typeE']);
                 $adresse = htmlspecialchars($_POST['adresseE']);

		 		if(filter_var($id,FILTER_VALIDATE_INT)){

		 			$testId = $conn->prepare('SELECT * FROM evenement WHERE id = ?');
		 			$testId->execute(array($id));

		 			$nbLignes = $testId->rowCount();

		 			if($nbLignes != 0){
            $modificationClient = $conn->prepare('UPDATE evenement SET  place = :placeE , date = :dateE , temp = :tempE , type = :typeE , adresse = :adresseE WHERE id= :idE');

             				$modificationClient->execute(array("placeE" => $place,
             												   "dateE" => $date,
             												   "tempE" => $temp,
             												   "typeE" => $type,
                                                                "adresseE" => $adresse,
                                                                "idE" => $id));
    
                            
             				echo 'Le Client a été bien modifié !!';
             			}else{
             				echo 'Cet id n\'existe pas !!';
             			}
                    
    
             		}else{
             			echo 'Cet id est non valable !!';
             		}
                    
             	}else{
             		echo 'Attention, Tous Les Champs Sont Obligatoires !!';
             	}
             }


?>