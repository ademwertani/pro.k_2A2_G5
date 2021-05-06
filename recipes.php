<?php require 'header.php';  
$DB=new DB();
?>
            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Recipes</h2>
                                <span><a href="about-us.html">Home </a>/ <a href="recipes.html">recipes</a></span>
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
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="filters col-md-12 col-xs-12">
                            <ul id="filters" class="clearfix">
                                <li><span class="filter" data-filter="all">All</span></li>
                                <li><span class="filter" data-filter=".ginger">Ginger</span></li>
                                <li><span class="filter" data-filter=".pizza">Pizza</span></li>
                                <li><span class="filter" data-filter=".pasta">Pasta</span></li>
                                <li><span class="filter" data-filter=".drink">Drink</span></li>
                                <li><span class="filter" data-filter=".hamburger">Hamburger</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" id="Container">
                        <?php $products=$DB->query('SELECT * FROM products');  ?>
                        <?php foreach ($products as $product ): ?>
                       <div class="col-md-3 col-sm-6 mix portfolio-item Pizza">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/<?= $product->id; ?>.png" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox addPanier" href="addpanier.php?id=<?= $product->id; ?>"><img src="images/open-icon.png" alt="" /></a>
                                            <span><?= $product->name; ?></span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><?= $product->name; ?></h3>
                                    <span class="text-category"><?= number_format($product->price,2,',',''); ?></span>
                                </div>
                            </div>          
                        </div>
                       <?php endforeach ?>
                    </div>
            </div>
        </div>
<?php require 'footer.php'; ?>