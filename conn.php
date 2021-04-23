<?php
try {
		 	$conn = new PDO("mysql:host=localhost;dbname=test;port=3306;charset=utf8", 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		 } catch (Exception $e) {
		 	echo 'Erreur de connexion: ' . $e->getMessage();
		 }



         if(isset($_POST['placeE']) && isset($_POST['dateE']) && isset($_POST['tempE']) && isset($_POST['typeE']) && isset($_POST['adresseE'])){
            if(!empty($_POST['placeE']) && !empty($_POST['dateE']) && !empty($_POST['tempE']) && !empty($_POST['typeE']) && !empty($_POST['adresseE'])){
               
               $place = htmlspecialchars($_POST['placeE']);
               $date = htmlspecialchars($_POST['dateE']);
                $temp = htmlspecialchars($_POST['tempE']);
                $type = htmlspecialchars($_POST['typeE']);
                $adresse = htmlspecialchars($_POST['adresseE']);
               $insertion = $conn->prepare('INSERT INTO evenement(place,date,temp,type,adresses) VALUES(?,?,?,?,?)');
               $insertion->execute(array($place,$date,$temp,$type,$adresse));

                echo 'Le Client a été bien ajouté !!';
            }else{
               echo 'Attention, Tous Les Champs Sont Obligatoires !!';
            }
        }

         ?>