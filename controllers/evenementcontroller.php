<?php
include_once "config.php";

class evenementcontroller
{

    function ajouterevenement($evenement)
    {
        $db = config::getConnexion();

      
        if(isset($_POST['placeE']) && isset($_POST['dateE']) && isset($_POST['tempE']) && isset($_POST['typeE']) && isset($_POST['adresseE']) && isset($_POST['nbrE'])){
            if(!empty($_POST['placeE']) && !empty($_POST['dateE']) && !empty($_POST['tempE']) && !empty($_POST['typeE']) && !empty($_POST['adresseE']) && !empty($_POST['nbrE'])){
               
               $place = htmlspecialchars($_POST['placeE']);
               $date = htmlspecialchars($_POST['dateE']);
                $temp = htmlspecialchars($_POST['tempE']);
                $type = htmlspecialchars($_POST['typeE']);
                $adresse = htmlspecialchars($_POST['adresseE']);
                $nbr = htmlspecialchars($_POST['nbrE']);
               $insertion = $db->prepare('INSERT INTO evenement(place,date,temp,type,adresse,nbr) VALUES(?,?,?,?,?,?)');
               $insertion->execute(array($place,$date,$temp,$type,$adresse,$nbr));

                echo 'L evenement a été bien ajouté !!';
            }else{
               echo 'Attention, Tous Les Champs Sont Obligatoires   !!';
            }
        }
    }

    //function afficherevenement()
    function afficherevenement()
    {
        $db = config::getConnexion();
        $contenu = $db->prepare('SELECT * FROM evenement');
		$contenu->execute();


		 		echo '<table>';

		 		while($ligne = $contenu->fetch()){
		 			echo '<tr>';

                     
		 				echo '<td>';
                         echo 'id ';
		 					echo $ligne['id'];
		 				echo '</td>';

		 				echo '<td>';
                         echo 'place ';
		 					echo $ligne['place'];
		 				echo '</td>';

		 				echo '<td>';
                         echo 'date ';
		 					echo $ligne['date'];
		 				echo '</td>';

		 				echo '<td>';
                         echo 'temp ';
		 					echo $ligne['temp'];
		 				echo '</td>';
                         echo '<td>';
                         echo 'type ';
		 					echo $ligne['type'];
                             echo '</td>';
                             echo '<td>';
                             echo 'adresse ';
		 					echo $ligne['adresse'];
		 				    echo '</td>';
                             echo '<td>';
                             echo 'nbr ';
		 					echo $ligne['nbr'];
		 				    echo '</td>';

		 			echo '</tr>';
		 		}

		 		echo '</table>';
		 	
    }




    function pdf()
    {
        require('vendor/autoload.php');
        $con=mysqli_connect('localhost','root','','pro.k');
        $res=mysqli_query($con,"select * from evenement");
        if(mysqli_num_rows($res)>0){
            $html='<style></style><table class="table">';
                $html.='<tr><td>id</td><td>place</td><td>date</td><td>temp</td><td>type</td><td>adresse</td><td>nbr</td></tr>';
                while($row=mysqli_fetch_assoc($res)){
                    $html.='<tr><td>'.$row['id'].'</td><td>'.$row['place'].'</td><td>'.$row['date'].'</td><td>'.$row['temp'].'</td><td>'.$row['type'].'</td><td>'.$row['adresse'].'</td><td>'.$row['nbr'].'</td></tr>';
                }
            $html.='</table>';
        }else{
            $html="Data not found";
        }
        $mpdf=new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $file='media/'.time().'.pdf';
        $mpdf->output($file,'I');
        //D
        //I
        //F
        //S
        
		 	
		 	
    }

    //function modifierCategorie()
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

    function chercherevenement1($id)
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
                        echo '<table>';

                        while($ligne = $testId->fetch()){
                            echo '<tr>';

                     
		 				echo '<td>';
                         echo 'id ';
		 					echo $ligne['id'];
		 				echo '</td>';

		 				echo '<td>';
                         echo 'place ';
		 					echo $ligne['place'];
		 				echo '</td>';

		 				echo '<td>';
                         echo 'date ';
		 					echo $ligne['date'];
		 				echo '</td>';

		 				echo '<td>';
                         echo 'temp ';
		 					echo $ligne['temp'];
		 				echo '</td>';
                         echo '<td>';
                         echo 'type ';
		 					echo $ligne['type'];
                             echo '</td>';
                             echo '<td>';
                             echo 'adresse ';
		 					echo $ligne['adresse'];
		 				    echo '</td>';
                             echo '<td>';
                             echo 'nbr ';
		 					echo $ligne['nbr'];
		 				    echo '</td>';

		 			echo '</tr>';
                        }
       
                        echo '</table>';
                        
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

    function chercherevenement2($place)
    {
        
        $db = config::getConnexion();
        if(isset($_POST['placeE'])){
            if(!empty($_POST['placeE'])){
               
                $id = htmlspecialchars($_POST['placeE']);
   
               

                    $testId = $db->prepare('SELECT * FROM evenement  WHERE place = ?');
                    $testId->execute(array($id));

                    $nbLignes = $testId->rowCount();

                    if($nbLignes != 0){
                        echo '<table>';

                        while($ligne = $testId->fetch()){
                            echo '<tr>';

                     
                            echo '<td>';
                            echo 'id ';
                                echo $ligne['id'];
                            echo '</td>';
   
                            echo '<td>';
                            echo 'place ';
                                echo $ligne['place'];
                            echo '</td>';
   
                            echo '<td>';
                            echo 'date ';
                                echo $ligne['date'];
                            echo '</td>';
   
                            echo '<td>';
                            echo 'temp ';
                                echo $ligne['temp'];
                            echo '</td>';
                            echo '<td>';
                            echo 'type ';
                                echo $ligne['type'];
                                echo '</td>';
                                echo '<td>';
                                echo 'adresse ';
                                echo $ligne['adresse'];
                                echo '</td>';
                                echo '<td>';
                                echo 'nbr ';
                                echo $ligne['nbr'];
                                echo '</td>';
   
                        echo '</tr>';
                        }
       
                        echo '</table>';
                        
                    }else{
                        echo 'Cet PLACE n\'existe pas !!';
                    }
               

                
               
            }else{
                echo 'Attention, Ce Champ est Obligatoire !!';
            }
        }
    }

    




    function chercherevenement3($adresse)
    {
        
        $db = config::getConnexion();
        if(isset($_POST['adresseE'])){
            if(!empty($_POST['adresseE'])){
               
                $id = htmlspecialchars($_POST['adresseE']);
   
               

                    $testId = $db->prepare('SELECT * FROM evenement  WHERE adresse = ?');
                    $testId->execute(array($id));

                    $nbLignes = $testId->rowCount();

                    if($nbLignes != 0){
                        echo '<table>';

                        while($ligne = $testId->fetch()){
                            echo '<tr>';

                     
		 				echo '<td>';
                         echo 'id ';
		 					echo $ligne['id'];
		 				echo '</td>';

		 				echo '<td>';
                         echo 'place ';
		 					echo $ligne['place'];
		 				echo '</td>';

		 				echo '<td>';
                         echo 'date ';
		 					echo $ligne['date'];
		 				echo '</td>';

		 				echo '<td>';
                         echo 'temp ';
		 					echo $ligne['temp'];
		 				echo '</td>';
                         echo '<td>';
                         echo 'type ';
		 					echo $ligne['type'];
                             echo '</td>';
                             echo '<td>';
                             echo 'adresse ';
		 					echo $ligne['adresse'];
		 				    echo '</td>';
                             echo '<td>';
                             echo 'nbr ';
		 					echo $ligne['nbr'];
		 				    echo '</td>';

		 			echo '</tr>';
                        }
       
                        echo '</table>';
                        
                    }else{
                        echo 'Cet PLACE n\'existe pas !!';
                    }
               

                
               
            }else{
                echo 'Attention, Ce Champ est Obligatoire !!';
            }
        }
    }

    



    function chercherparticipant4($adresse)
    {
        
        $db = config::getConnexion();
        if(isset($_POST['adresseE'])){
            if(!empty($_POST['adresseE'])){
               
                $id = htmlspecialchars($_POST['adresseE']);           

                    $testId = $db->prepare('SELECT participation.idpart, participation.idev, participation.idcl, participation.datepart, 
                    participation.fraispart FROM participation 
                     INNER JOIN evenement ON evenement.adresse = ? ');
                  
                    $testId->execute(array($id));

                    $nbLignes = $testId->rowCount();

                    if($nbLignes != 0){
                        echo '<table>';

                        while($ligne = $testId->fetch()){
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
                        
                    }else{
                        echo 'Cet PLACE n\'existe pas !!';
                    }
               

                
               
            }else{
                echo 'Attention, Ce Champ est Obligatoire !!';
            }
        }
    }











    /*function setcooking($id)
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
    
    }*/




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
    
    }
}







