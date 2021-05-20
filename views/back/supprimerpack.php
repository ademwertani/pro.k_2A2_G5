<?php
include "C:/xampp/htdocs/pro.k/controllers/pack_bd.php";
$pack=new packet_bd();
$pack->SupprimerPack($_GET['id']);
header('location:affichage2.php');
?>