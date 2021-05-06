<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<!-- 

Grill Template 

http://www.templatemo.com/free-website-templates/417-grill

-->

<?php
include_once "../../controllers/categoriecontroller.php";
$categorieC = new categoriecontroller();
$listecategorie = $categorieC->afficherCategorie();
$db = config::getConnexion();

$start = 0; 
$per_page=4; 
$page_counter = 0; 
$next = $page_counter+1; 
$previous = $page_counter -1; 

if (isset($_GET['start']))
{
    $start = $_GET['start']; 
    $page_counter=$_GET['start']; 
    $start=$start * $per_page; 
    $next = $page_counter+1; 
    $previous = $page_counter -1 ; 

}

$qry = "SELECT * From recette limit $start, $per_page";
$query=$db->prepare($qry); 
$query->execute(); 

if($query->rowCount() > 0){
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
}

$count_query="SELECT * from recette"; 
$query=$db->prepare($count_query); 
$query->execute(); 
$count=$query->rowCount(); 

$paginations=ceil($count/$per_page);

require_once "../../controllers/recettecontroller.php";

$recettec = new recettecontroller();
$listrecette = $recettec->afficherRecette();

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
                            <a href="#">My account</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cart-info">
                            <i class="fa fa-shopping-cart"></i>
                            (<a href="#">5 items</a>) in your cart (<a href="#">$45.80</a>)
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
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="recipes.php">recipes</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
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

    <div id="heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content">
                        <h2>Recipes</h2>
                        <span><a href="index.html">Home </a>/ <a href="recipes.php">recipes</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="products-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="product-heading">
                        <h2>Hungry ?</h2>
                        <img src="images/under-heading.png" alt="">
                    </div>
                </div>
            </div>

            <!-- cat -->


            <div class="row">
                <div class="filters col-md-12 col-xs-12">
                    <ul id="filters" class="clearfix">
                        <form method="post">
                            <?php  foreach ($listecategorie as $l) { ?>


                            <li type="submit">


                                <span class="filter" data-filter="all" value=<?php $l['nom'] ?> name=cat >
                                    <?php echo $l['nom'] ?>
                                </span>
                            </li>

                            <?php } ?>
                        </form>
                    </ul>
                </div>


            </div>


            <!-- catfinish-->


            <div class="row" id="Container">
                <?php  foreach($result as $lr) {?>


                <div class="col-lg-6 col-md-6 col-xl-6">


                    <div class="portfolio-wrapper">

                        <div class="portfolio-thumb">
                            <img src="../back/uploads/<?= $lr['image'] ?>" class="cover-image"
                                style="width:450px; height:300px;">


                        </div>
                        <div class="label-text">
                            <h3><a href="single-post.php?id=<?php echo $lr['id'];?>">
                                    <?php echo $lr ['nom'] ?>
                                </a></h3>
                            <span class="text-category">
                                <?php echo $lr['description'] ?>
                            </span>
                        </div>

                    </div>


                </div>



                <?php } ?>

            </div>

        </div>
        <center>
            <ul class="pagination">
                <?php


if($page_counter == 0){
    echo "<li><a href=?start='0' class='active'>0</a></li>";
    for($j=1; $j < $paginations; $j++) { 
        
      echo "<li><a href=?start=$j>".$j."</a></li>";
   }
    }else{
    echo "<li><a href=?start=$previous>Previous</a></li>"; 
    for($j=0; $j < $paginations; $j++) {
     if($j == $page_counter) {
        echo "<li><a href=?start=$j class='active'>".$j."</a></li>";
     }else{
        echo "<li><a href=?start=$j>".$j."</a></li>";
     } 
  }if($j != $page_counter+1)
    echo "<li><a href=?start=$next>Next</a></li>"; 
} 
?>
            </ul>
        </center>

    </div>

    <!-- /container -->

    <footer>
        <div class="container">
            <div class="top-footer">
                <div class="row">
                    <div class="col-md-9">
                        <div class="subscribe-form">
                            <span>Get in touch with us</span>
                            <form method="get" class="subscribeForm">
                                <input id="subscribe" type="text" />
                                <input type="submit" id="submitButton" />
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="social-bottom">
                            <span>Follow us:</span>
                            <ul>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-rss"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer">
                <div class="row">
                    <div class="col-md-3">
                        <div class="about">
                            <h4 class="footer-title">About Grill</h4>
                            <p>Grill is free HTML5 template by <span class="blue">template</span><span
                                    class="green">mo</span> and it is a free responsive bootstrap layout
                                that can be
                                applied for any purpose.
                                <br><br>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for
                                photos used in this template. Nam commodo erat quis ligula placerat
                                viverra.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="shop-list">
                            <h4 class="footer-title">Shop Categories</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>New Grill Menu</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Healthy Fresh
                                        Juices</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Spicy Delicious
                                        Meals</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Simple Italian
                                        Pizzas</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Pure Good Yogurts</a>
                                </li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Ice-cream for kids</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="recent-posts">
                            <h4 class="footer-title">Recent posts</h4>
                            <div class="recent-post">
                                <div class="recent-post-thumb">
                                    <img src="images/recent-post1.jpg" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <h6><a href="#">Delicious and Healthy Menus</a></h6>
                                    <span>24/12/2084</span>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-thumb">
                                    <img src="images/recent-post2.jpg" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <h6><a href="#">Simple and effective meals</a></h6>
                                    <span>18/12/2084</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="more-info">
                            <h4 class="footer-title">More info</h4>
                            <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in
                                pulvinar velit
                                massa id elit.</p>
                            <ul>
                                <li><i class="fa fa-phone"></i>010-020-0340</li>
                                <li><i class="fa fa-globe"></i>123 Dagon Studio, Yakin Street, Digital
                                    Estate</li>
                                <li><i class="fa fa-envelope"></i><a href="#">info@company.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <p>Copyright © 2084 <a href="#">Your Company Name</a></p>
            </div>

        </div>
    </footer>


</body>

</html>