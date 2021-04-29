<?php
include "../../controllers/commentairecontroller.php"; 
include "../../entity/commentaire.php";





    $commentaire1 = new commentaire($_POST['nom'],$_POST['email'],$_POST['Commentaire']); 
    $commentaire1controller = new commentairecontroller(); 
    $commentaire1controller->ajouterCommentaire($commentaire1);

    header('Location: single-post.php'); 


?>