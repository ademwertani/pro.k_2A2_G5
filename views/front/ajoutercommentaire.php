<?php
include "../../controllers/commentairecontroller.php"; 
include "../../entity/commentaire.php";





    $commentaire1 = new commentaire($_POST['nom'],$_POST['mail'],$_POST['commentaire']); 
    $commentaire1controller = new commentairecontroller(); 
    $commentaire1controller->ajouterCommentaire($commentaire1);

    header('Location: recipes.php'); // baed maysir l'ajout iaawed iraj3ek el nafs el page  


?>