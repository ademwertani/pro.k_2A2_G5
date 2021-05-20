<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
include('header.php') ;
?>

<div class="container">
    <h1>Etat de la Commande</h1>
    <p>Votre Commande a etait bien enregistre sous l'ID  #<?php echo $_GET['id']; ?></p>
</div>

<?php include('footer.php') ; ?>
