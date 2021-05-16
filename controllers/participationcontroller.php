<?php
include_once "config.php";

class participationcontroller
{

    function ajouterparticipation($idE)
    {
        $db = config::getConnexion();

      
        if(isset($_POST['idE'])){
            if(!empty($_POST['idE'])){
               $idc = $db->prepare('SELECT idc FROM client');               
               $idE = htmlspecialchars($_POST['idE']);
               $date = date("d/m/Y");
               $fr = 15;
               $insertion = $db->prepare('INSERT INTO participation(idev,idcl,datepart,fraispart) VALUES(?,?,?,?)');
               $insertion->execute(array($idE,$idc,$date,$fr));

                echo 'votre participation a été bien ajouté !!';
            }else{
               echo 'Attention, Tous Les Champs Sont Obligatoires  !!';
            }
        }
    }

    
    function afficherparticipation()
    {
        $db = config::getConnexion();
        $contenu = $db->prepare('SELECT * FROM participation');
		$contenu->execute();

        echo '<tr>';

		 				echo '<td>';
		 					echo'id ';
		 				echo '</td>';

		 				echo '<td>';
		 					echo 'idev ';
		 				echo '</td>';

		 				echo '<td>';
		 					echo 'idcl ';
		 				echo '</td>';

		 				echo '<td>';
		 					echo 'date ';
		 				echo '</td>';
                         echo '<td>';
		 					echo 'frais ';
                             echo '</td>';
                            

		 			echo '</tr>';

		 		echo '<table>';

		 		while($ligne = $contenu->fetch()){
		 			echo '<tr>';

		 				echo '<td>';
		 					echo $ligne['idpart'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['idev'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['idcl'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['datepart'];
		 				echo '</td>';
                         echo '<td>';
		 					echo $ligne['fraispart'];
                             echo '</td>';
                            

		 			echo '</tr>';
		 		}

		 		echo '</table>';
		 	
    }



   

    function mailparticipation($adresse)
    {
$header="MIME-Version: 1.0\r\n";
$header.='From:"pro_k.com"<support@pro_k.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='


<html>
	<body>
		<div align="center">
			<h1>bienvenue a notre evenement !</h1>
			<br />
			
		</div>
	</body>
</html>
';
mail($adresse, "bonjour", "bienvenue a notre evenement !!", $header);
    }

    


    

  /*/  //function modifierCategorie()
    function modifierevenement()
    {
       
        $db = config::getConnexion();

        if(isset($_POST['idE']) && isset($_POST['placeE']) && isset($_POST['dateE']) && isset($_POST['tempE']) && isset($_POST['typeE']) && isset($_POST['adresseE']) && isset($_POST['nbrE'])){
            if(!empty($_POST['idE']) && !empty($_POST['placeE']) && !empty($_POST['dateE']) && !empty($_POST['tempE']) && !empty($_POST['typeE']) && !empty($_POST['adresseE']) && !empty($_POST['nbrE'])){
                        
                         $id = htmlspecialchars($_POST['idE']);
                         $place = htmlspecialchars($_POST['placeE']);
                         $date = htmlspecialchars($_POST['dateE']);
                         $temp = htmlspecialchars($_POST['tempE']);
                         $type = htmlspecialchars($_POST['typeE']);
                         $adresse = htmlspecialchars($_POST['adresseE']);
                         $nbr = htmlspecialchars($_POST['nbrE']);
                         if(filter_var($id,FILTER_VALIDATE_INT)){
        
                             $testId = $db->prepare('SELECT * FROM evenement WHERE id = ?');
                             $testId->execute(array($id));
        
                             $nbLignes = $testId->rowCount();
        
                             if($nbLignes != 0){
                    $modificationClient = $db->prepare('UPDATE evenement SET  place = :placeE , date = :dateE , temp = :tempE , type = :typeE , adresse = :adresseE , nbr = :nbrE WHERE id= :idE');
        
                                     $modificationClient->execute(array("placeE" => $place,
                                                                        "dateE" => $date,
                                                                        "tempE" => $temp,
                                                                        "typeE" => $type,
                                                                        "adresseE" => $adresse,
                                                                        "nbrE" => $nbr,
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
        
    }


    //function supprimerCategorie()

    function suprimerevenement($id)
    {
        
        $db = config::getConnexion();
        if(isset($_POST['idE'])){
            if(!empty($_POST['idE'])){
               
                $id = htmlspecialchars($_POST['idE']);
   
                if(filter_var($id,FILTER_VALIDATE_INT)){

                    $testId = $db->prepare('SELECT * FROM evenement WHERE id = ?');
                    $testId->execute(array($id));

                    $nbLignes = $testId->rowCount();

                    if($nbLignes != 0){
                       
                        $suppressionClient = $db->prepare('DELETE FROM evenement WHERE id = ?');
                        $suppressionClient->execute(array($id));
                       
                        echo 'Le Client a été bien supprimé !!';
                    }else{
                        echo 'Cet id n\'existe pas !!';
                    }
               

                }else{
                    echo 'Cet id est non valable !!';
                }
               
            }else{
                echo 'Attention, Ce Champ est Obligatoire !!';
            }
        }
    }

    //function rechercherevenement()


    //function rechercherevenement($nom){
		//$sql="SELECT c.id from categorie c where c.nom=$nom";
		//$db = config::getConnexion();
		//try{
		//$liste=$db->query($sql);
		//return $liste;
		//}
      // catch (Exception $e){
       //     die('Erreur: '.$e->getMessage());
      //  }

	//}







    function setcooking($id)
    {
        
        $db = config::getConnexion();
        if(isset($_POST['idE'])){
            if(!empty($_POST['idE'])){
               
                $id = htmlspecialchars($_POST['idE']);
   
                if(filter_var($id,FILTER_VALIDATE_INT)){
                    $cal = $db->prepare('SELECT nbr FROM evenement WHERE id = ?');
                    $testId = $db->prepare('SELECT * FROM evenement WHERE id = ?');
                    $testId->execute(array($id));

                    $nbLignes = $testId->rowCount();
                   
                    if($nbLignes != 0){
                        
                       
                        $setClient = $db->prepare('UPDATE evenement SET nbr = nbr-1  WHERE id = ?');
                        $setClient->execute(array($id));
                       
                        echo 'votre inscription est terminer !!';
                    }
                  
                    else{
                        echo 'Cet id n\'existe pas !!';
                    }
                        
        
                         }
                         else{
                             echo 'Cet id est non valable !!';
                         }
                        
                     }
                     
                     else
                     {
                         echo 'Attention, Tous Les Champs Sont Obligatoires !!';
                     }
                 }
    
    }




    function affichercooking()
    {
        $db = config::getConnexion();
        $contenu = $db->prepare('SELECT * FROM evenement WHERE type ="COOKING"');
		$contenu->execute();


		 		echo '<table>';

		 		while($ligne = $contenu->fetch()){
		 			echo '<tr>';

		 				echo '<td>';
		 					echo $ligne['id'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['place'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['date'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['temp'];
		 				echo '</td>';
                         echo '<td>';
		 					echo $ligne['type'];
                             echo '</td>';
                             echo '<td>';
		 					echo $ligne['adresse'];
		 				    echo '</td>';
                             echo '<td>';
		 					echo $ligne['nbr'];
		 				    echo '</td>';

		 			echo '</tr>';
		 		}

		 		echo '</table>';
		 	
    }
    function afficherdrink()
    {
        $db = config::getConnexion();
        $contenu = $db->prepare('SELECT * FROM evenement WHERE type ="DRINKS"');
		$contenu->execute();


		 		echo '<table>';

		 		while($ligne = $contenu->fetch()){
		 			echo '<tr>';

		 				echo '<td>';
		 					echo $ligne['id'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['place'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['date'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['temp'];
		 				echo '</td>';
                         echo '<td>';
		 					echo $ligne['type'];
                             echo '</td>';
                             echo '<td>';
		 					echo $ligne['adresse'];
		 				    echo '</td>';
                             echo '<td>';
		 					echo $ligne['nbr'];
		 				    echo '</td>';

		 			echo '</tr>';
		 		}

		 		echo '</table>';
		 	
    }
    function afficherkitchen()
    {
        $db = config::getConnexion();
        $contenu = $db->prepare('SELECT * FROM evenement WHERE type ="EQUIPEMENT"');
		$contenu->execute();


		 		echo '<table>';

		 		while($ligne = $contenu->fetch()){
		 			echo '<tr>';

		 				echo '<td>';
		 					echo $ligne['id'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['place'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['date'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['temp'];
		 				echo '</td>';
                         echo '<td>';
		 					echo $ligne['type'];
                             echo '</td>';
                             echo '<td>';
		 					echo $ligne['adresse'];
		 				    echo '</td>';
                             echo '<td>';
		 					echo $ligne['nbr'];
		 				    echo '</td>';

		 			echo '</tr>';
		 		}

		 		echo '</table>';
		 	
    }
    function afficherrecipes()
    {
        $db = config::getConnexion();
        $contenu = $db->prepare('SELECT * FROM evenement WHERE type ="RECIPES"');
		$contenu->execute();


		 		echo '<table>';

		 		while($ligne = $contenu->fetch()){
		 			echo '<tr>';

		 				echo '<td>';
		 					echo $ligne['id'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['place'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['date'];
		 				echo '</td>';

		 				echo '<td>';
		 					echo $ligne['temp'];
		 				echo '</td>';
                         echo '<td>';
		 					echo $ligne['type'];
                             echo '</td>';
                             echo '<td>';
		 					echo $ligne['adresse'];
		 				    echo '</td>';
                             echo '<td>';
		 					echo $ligne['nbr'];
		 				    echo '</td>';

		 			echo '</tr>';
		 		}

		 		echo '</table>';
		 	
    }
    function setdrink($id)
    {
        
        $db = config::getConnexion();
        if(isset($_POST['idE'])){
            if(!empty($_POST['idE'])){
               
                $id = htmlspecialchars($_POST['idE']);
   
                if(filter_var($id,FILTER_VALIDATE_INT)){

                    $testId = $db->prepare('SELECT * FROM evenement WHERE id = ?');
                    $testId->execute(array($id));

                    $nbLignes = $testId->rowCount();

                    if($nbLignes != 0){
                        
                       
                        $setClient = $db->prepare('UPDATE evenement SET nbr = nbr-1  WHERE id = ?');
                        $setClient->execute(array($id));
                       
                        echo 'votre inscription est terminer !!';
                    }else{
                        echo 'Cet id n\'existe pas !!';
                    }
                        
        
                         }
                         else{
                             echo 'Cet id est non valable !!';
                         }
                        
                     }
                     else
                     {
                         echo 'Attention, Tous Les Champs Sont Obligatoires !!';
                     }
                 }
    
    }
    function setkitchen($id)
    {
        
        $db = config::getConnexion();
        if(isset($_POST['idE'])){
            if(!empty($_POST['idE'])){
               
                $id = htmlspecialchars($_POST['idE']);
   
                if(filter_var($id,FILTER_VALIDATE_INT)){

                    $testId = $db->prepare('SELECT * FROM evenement WHERE id = ?');
                    $testId->execute(array($id));

                    $nbLignes = $testId->rowCount();

                    if($nbLignes != 0){
                        
                       
                        $setClient = $db->prepare('UPDATE evenement SET nbr = nbr-1  WHERE id = ?');
                        $setClient->execute(array($id));
                       
                        echo 'votre inscription est terminer !!';
                    }else{
                        echo 'Cet id n\'existe pas !!';
                    }
                        
        
                         }
                         else{
                             echo 'Cet id est non valable !!';
                         }
                        
                     }
                     else
                     {
                         echo 'Attention, Tous Les Champs Sont Obligatoires !!';
                     }
                 }
    
    }
    function setrecipes($id)
    {
        
        $db = config::getConnexion();
        if(isset($_POST['idE'])){
            if(!empty($_POST['idE'])){
               
                $id = htmlspecialchars($_POST['idE']);
   
                if(filter_var($id,FILTER_VALIDATE_INT)){

                    $testId = $db->prepare('SELECT * FROM evenement WHERE id = ?');
                    $testId->execute(array($id));

                    $nbLignes = $testId->rowCount();

                    if($nbLignes != 0){
                        
                       
                        $setClient = $db->prepare('UPDATE evenement SET nbr = nbr-1  WHERE id = ?');
                        $setClient->execute(array($id));
                       
                        echo 'votre inscription est terminer !!';
                    }else{
                        echo 'Cet id n\'existe pas !!';
                    }
                        
        
                         }
                         else{
                             echo 'Cet id est non valable !!';
                         }
                        
                     }
                     else
                     {
                         echo 'Attention, Tous Les Champs Sont Obligatoires !!';
                     }
                 }
    
    }*/
}

