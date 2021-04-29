
<?php
include "../../controllers/produitC.php";

$produit1C = new produitC();
$listproduit = $produit1C->afficherProduit();
?>    

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!-- 

Grill Template 

http://www.templatemo.com/free-website-templates/417-grill

-->
    <head>
        <meta charset="utf-8">
        <title>Products -  Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/testimonails-slider.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

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
                                    <a href="#"><img src="images/logo.png" title="Grill Template" alt="Grill Website Template" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a href="recipes.html">recipes</a></li>
                                        <li><a href="Produits.html">Products</a></li>
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
                                <h2>Produits</h2>
                                <span><a href="about-us.html">Home </a>/ <a href="Produits.html">Produits</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




   
                      	
    
            

           
            <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Liste des produits
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <tr>
                                            <th>id</th>
                                            <th>nom</th>
                                            <th>description </th>
                                            <th>etat </th>
                                            <th>date de fabrication </th> 
                                            <th>prix </th>
                                            
                                            
                                            
                                        </tr>
                                        
                                        <label>Trier les Produits par   </label>
                                        <br> </br>

                                        <form  action="tri_produit.php">
               <button   type="submit" name="trier" class="btn btn btn-primary btn-rounded float-right" data-animation="fadeInUp" data-delay="1s" data-duration="500ms" >nom</button>
        </form>
        <br> </br>
        <form  action="tri_Prixproduit.php">
        
               <button   type="radio" name="trier" class="btn btn btn-primary btn-rounded float-right" data-animation="fadeInUp" data-delay="1s" data-duration="500ms" >prix</button>
        </form>
        <br> </br>
        <form  action="tri_Dateproduit.php">
               <button   type="radio" name="trier" class="btn btn btn-primary btn-rounded float-right" data-animation="fadeInUp" data-delay="1s" data-duration="500ms" >date de fabrication</button>
        </form>
        
        <br> </br>

                    


                                        <?php foreach ($listproduit as $l) { ?>
                                            <tr>
                                                <td> <?php echo $l['id'] ?> </td>
                                                <td> <?php echo $l['nom'] ?> </td>
                                                <td> <?php echo $l['description'] ?> </td>
                                                <td> <?php echo $l['etat'] ?> </td>
                                                <td> <?php echo $l['dateFabrication'] ?> </td>
                                                <td> <?php echo $l['prix'] ?> </td>

                                                



                                                




                                               

                                            
                                                

                                                







                                            </tr>
                                        <?php } ?>

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>




                                              
                                                        }
                                                    



                              
                                      
                               

                    
                 

         





            <div id="products-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="product-heading">
                                <h2>Découvrez tous nos produits</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="filters col-md-12 col-xs-12">
                            <ul id="filters" class="clearfix">
                                <li><span class="filter" data-filter="all">All</span></li>
                                <li><span class="filter" data-filter=".Cuisson">Cuisson</span></li>
                                <li><span class="filter" data-filter=".LaveLinge">LaveLinge</span></li>
                                <li><span class="filter" data-filter=".Encastrable">Encastrable</span></li>
                                <li><span class="filter" data-filter=".Living">Living</span></li>
                                <li><span class="filter" data-filter=".Froid">Froid</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" id="Container">
                        <div class="col-md-3 col-sm-6 mix portfolio-item Cuisson">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="Produits/Cuisson1.png" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="Produits/Cuisson1.png"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Cuisson</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Cuisiniéres,Cuisson</a></h3>
                                    <span class="text-category">600dt</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item Cuisson">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="Produits/Cuisson2.png" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="Produits/Cuisson2.png"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Cuisson</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="recipes1/single-post.html">Cuisiniéres,Cuisson</a></h3>
                                    <span class="text-category">$550dt</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item LaveLinge">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="Produits/LaveLinge1.jpg" alt=" " />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="Produits/LaveLinge1.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Lave Linge</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Lave Linge</a></h3>
                                    <span class="text-category">$450</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item Encastrable">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="Produits/hotte-casquette-60-cm-.png" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="Produits/hotte-casquette-60-cm-.png"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Encastrable</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Hotte-casquette-60-cm</a></h3>
                                    <span class="text-category">250dt</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item Living">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="Produits/batteur-a-main-.png" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="Produits/batteur-a-main-.png"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Batteur à main</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">batteur à main</a></h3>
                                    <span class="text-category">75dt</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item Froid">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="Produits/Refrigirateur.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="Produits/Refrigirateur.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Froid</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Refrigirateur</a></h3>
                                    <span class="text-category">850dt</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item LaveLinge">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="Produits/LaveLinge2.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="Produits/LaveLinge2.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>LaveLinge</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Lave Linge</a></h3>
                                    <span class="text-category">$450</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item Encastrable">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="Produits/four-encastrable-ofe-6f-1n.png" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="Produits/four-encastrable-ofe-6f-1n.png"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Encastrable</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Four encastrable</a></h3>
                                    <span class="text-category">600dt</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item Froid">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="Produits/Congelateur.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="Produits/Congelateur.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Congelateur</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Congelateur</a></h3>
                                    <span class="text-category">350dt</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item Living">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="Produits/chauffe-bain-10l-.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="Produits/chauffe-bain-10l-.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Chauffe bain</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Chauffe bain</a></h3>
                                    <span class="text-category">150dt</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item Living">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="Produits/chauffage.png" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="Produits/chauffage.png"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Chauffage</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Chauffage</a></h3>
                                    <span class="text-category">150dt</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item Froid">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="Produits/miniRefrigirateur.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="Produits/miniRefrigirateur.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Froid</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Mini Refrigirateur</a></h3>
                                    <span class="text-category">250dt</span>
                                </div>
                            </div>          
                        </div>
                    </div>
                    <div class="pagination">
                        <div class="row">   
                            <div class="col-md-12">
                                <ul>
                                	<li><a href="#">Previous</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>



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
                                    <p>Grill is free HTML5 template by <span class="blue">template</span><span class="green">mo</span> and it is a free responsive bootstrap layout that can be applied for any purpose.
                                    <br><br>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for photos used in this template. Nam commodo erat quis ligula placerat viverra.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="shop-list">
                                    <h4 class="footer-title">Shop Categories</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>New Grill Menu</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Healthy Fresh Juices</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Spicy Delicious Meals</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Simple Italian Pizzas</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Pure Good Yogurts</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Ice-cream for kids</a></li>
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
                                    <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit.</p>
                                    <ul>
                                        <li><i class="fa fa-phone"></i>010-020-0340</li>
                                        <li><i class="fa fa-globe"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
                                        <li><i class="fa fa-envelope"></i><a href="#">info@company.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <p>Copyright © 2084 <a href="index.html"> Pro.K</a></p>
                    </div>
                    
                </div>
            </footer>

    
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>