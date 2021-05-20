<?php

include('header.php') ; ?>

<?php
include_once "../../controllers/categorieC.php";
$categorieC = new categorieC();
$listecategorie = $categorieC->afficherCategorie();
$db = config::getConnexion();








    


$count_query="SELECT * from produit"; 
$query=$db->prepare($count_query); 
$query->execute(); 
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$count=$query->rowCount(); 



require_once "../../controllers/produitC.php";

$produitC = new produitC();
$listproduit = $produitC->afficherProduit();

?>



    <div id="heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content">
                        <h2>Produits</h2>
                        <span><a href="index.html">Home </a>/ <a href="produit.php">produit</a></span>
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
                        <a  class="w3ls-cart pw3ls-cart" href="cartAction.php?action=addToCart&id=<?php echo $lr["id"]; ?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Ajouter </a>
                    </div>


                </div>



                <?php } ?>

            </div>

        </div>
      

    </div>

    <!-- /container -->
<?php include('footer.php') ; ?>