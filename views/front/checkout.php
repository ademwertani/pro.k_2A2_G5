<?php
// include database configuration file

include('header.php') ;

// initializ shopping cart class
include_once "../../controllers/panierC.php";

$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
   
}


// get customer details by session customer ID


?>

<body>

<div class="container">
    <h1>Valider Le Panier</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
			
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["nom"]; ?></td>
            <td><?php echo $item["prix"].' DT'; ?></td>
            <td><?php echo $item["quantite"]; ?></td>
            <td><?php echo $item["subtotal"].' DT'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>Panier Vide ! ......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo $cart->total().' DT'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Details De l utilisateur</h4>

        <p><?php echo $_SESSION['email']; ?></p>

    </div>
    <div class="footBtn">
        <a href="Produit.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i>Retour au menu</a>
        <a href="cartAction.php?action=placeOrder" class="btn btn-success orderBtn">Valider Commande <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
	</div>
		</div>
		</div>
			
<?php include('footer.php') ; ?>
