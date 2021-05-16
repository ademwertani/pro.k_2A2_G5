<?php
include_once "config.php";

class acccontroller
{

    function verif()
    {
       
        $db = config::getConnexion();

        if(isset($_POST['adresseE']) && isset($_POST['adresseE'])){
            if(!empty($_POST['mdpE']) && !empty($_POST['mdpE'])){
                        
                         $adresse = htmlspecialchars($_POST['adresseE']);
                         $mdp = htmlspecialchars($_POST['mdpE']);
                         
                         
        
                             $testId = $db->prepare("select * from acc where adresse='".$adresse."'AND mdp='".$mdp."' limit 1");
                             $testId->execute(array($mdp));
        
                             $nbLignes = $testId->rowCount();
        
                             if($nbLignes != 0){
                               header("location: ajouter un evenement.html ");
                                
                    
                                 }else{
                                     echo 'Ces informations n\'existe pas !!';
                                 }
                            
            
                             
                            
                         }else{
                             echo 'Attention, Tous Les Champs Sont Obligatoires !!';
                         }
                     }
        
    }
    
          

   
}

 