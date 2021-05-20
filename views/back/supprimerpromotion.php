<?php
include "C:/xampp/htdocs/pro.k/controllers/promo_bd.php";
$promotion=new promotion_bd();
$promotion->SupprimerPromotion($_GET['id']);
header('location:affichage.php');
?>