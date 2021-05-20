<?php

    session_start();

// initialize shopping cart class
include '../../controllers/panierC.php';
$cart = new Cart;

// include database configuration file
;
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'confirmer' && !empty($_REQUEST['id'])){
		$orderID = $_REQUEST['id'];
		$cart->confirmerCommande($orderID);
		header("Location:table.php");
	}
}
?>