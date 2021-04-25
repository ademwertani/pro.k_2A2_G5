<?php

include "../../controllers/commentairecontroller.php"; 

$commentairec = new commentairecontroller(); 

if (isset($_POST["id"]))
{
    $commentairec->supprimerCommentaire($_POST["id"]); 
    header('Location: mdRecipe.php');
}
?>
