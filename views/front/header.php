<?php session_start();

include '../../controllers/panierC.php';
$cart = new Cart;

?>

<head>
    <meta charset="utf-8">
    <title>Pro.k - Recipes </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/testimonails-slider.css">

    <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>

<body>

<header>
    <div id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="home-account">
                        <a href="#">Home</a>
                        <a href="createaccount.php">Create account</a>
                        <a href="login.php">Login</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cart-info">
                        <i class="fa fa-shopping-cart"></i>
                        (<a href="viewCart.php"> <?php echo $cart->total_items() ; ?>  items</a>) in your cart (<a href="#"><?php echo $cart->total().' DT'; ?></a>)
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="#"><img src="images/logo.png" title="Grill Template"
                                         alt="Grill Website Template"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About</a></li>
                            <li><a href="recipes.php">recipes</a></li>
                            <li><a href="produit.php">Produit</a></li>
                            <li><a href="reclamationnn.php">Réclamation</a></li>
                            <li><a href="evenement.php"> evenements</a></li>
                            <li><a href="promotion2.php">promo</a></li>
                            <li><a href="recipes2.php">pack</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="search-box">
                        <form name="search_form" method="get" class="search_form">
                            <input id="search" type="text" />
                            <input type="submit" id="search-button" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>