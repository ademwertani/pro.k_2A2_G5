<?php

    session_start();

// initialize shopping cart class
include '../../controllers/panierC.php';
include "../../entity/produit.php";
include "../../controllers/produitC.php";
$cart = new Cart;
$produit = new ProduitC;

// include database configuration file

if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
        $productID = $_REQUEST['id'];
		
        // get product details
		$db=config::getConnexion();
		$q="SELECT * FROM produit WHERE id = ".$productID ;
        $query = $db->query($q);
        $row = $query->fetch(PDO::FETCH_ASSOC);
		
		
        $itemData = array(
            'referance' => $row['id'],
            'nom' => $row['nom'],
            'prix' => $row['prix'],
            'quantite' => 1
        );



        
        $insertItem = $cart->insert($itemData);


        $redirectLoc = $insertItem?'viewCart.php':'index.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
		
		
		$monProduit=$produit->findById($_REQUEST['id']);
		foreach ( $monProduit as $p )
		{



        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'quantite' => $_REQUEST['quantite']
        );
        $updateItem = $cart->update($itemData);

		echo $updateItem?'ok':'err';die;}

        
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: viewCart.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['idc'])){
        // insert order details into database
		$db=config::getConnexion();
        $insertOrder = $db->query("INSERT INTO orders (customer_id, total_price, created, modified) VALUES ('".$_SESSION['idc']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
        $total=$cart->total();

        if($insertOrder){

            $orderID = $db->lastInsertId();
            $sql = '';
			$sql1 = '';
            // get cart items
            $cartItems = $cart->contents();
			$db1 = new mysqli('localhost', 'root', '', 'pro.k');
            foreach($cartItems as $item){
                $sql .= "INSERT INTO order_items (order_id, product_id, quantity) VALUES ('".$orderID."', '".$item['referance']."', '".$item['quantite']."');";
				$monProduit=$produit->findById($item['referance']);

				
				
            }
            // insert order items into database
			
            $insertOrderItems = $db1->multi_query($sql);

            
            if($insertOrderItems){
                $cart->destroy();
				
				$to      = $_SESSION['mail'];
        $subject = 'Commande Validé !!';
        $message_body = '
        Salut '.$_SESSION['nom'].',

        Merci pour votre fidelité!

        Voici des information de votre commande:

        Id de la Commande :'.$orderID.
		
		'Prix total :'.$total.' DT ';  

        mail( $to, $subject, $message_body );
                header("Location: orderSuccess.php?id=$orderID");
            }else{
                header("Location: checkout.php");
            }
        }else{
            header("Location: checkout.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}