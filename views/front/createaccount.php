<?php 
  
  include_once '../../controllers/clientc.php';
  include_once '../../entity/client.php';
  include_once '../../config.php';
  
  
  $clientc =  new clientc();
  if (!empty( $_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mailclient']) && !empty($_POST['tel']) && !empty($_POST['adresse'] && !empty($_POST['motdepasse']))   ) {
  $client = new client( $_POST['nom'], $_POST['prenom'], $_POST['mailclient'], $_POST['tel'], $_POST['adresse'], $_POST['motdepasse']);
  $SecretKey = '6LdC69oaAAAAAPBsEA_dNSY4gSrr3YRl0HEkYHcb';
    $reponseKey = $_POST['g-recaptcha-response'];
    $serverIP = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$SecretKey&reponse=$reponseKey&remotip=$serverIP";
    $reponse = file_get_contents($url);
  $clientc->ajouterclient($client);
  
  header('Location:index.php');
   }
   

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
        <title>About - Grill Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/eeljeya.css">
        <link rel="stylesheet" href="../../css/font-awesome.css">
        <link rel="stylesheet" href="../../css/templatemo_style.css">
        <link rel="stylesheet" href="../../css/templatemo_misc.css">
        <link rel="stylesheet" href="../../css/flexslider.css">
        <link rel="stylesheet" href="../../css/testimonails-slider.css">
 <link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../css/util.css">
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
        <script src="../../js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
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
                                    <a href="index.php">Home</a>
                                    <a href="createaccount.php">create account</a>
                                    <a href="login.php">Login</a>
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
                                    <a href="#"><img src="../../images/logo.png" title="Grill Template" alt="Grill Website Template" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a href="recipes.html">recipes</a></li>
                                        <li><a href="réclamation.html">réclamation</a></li>
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


            <div class="container-fluid">
                        
                       
                        <div class="row">
                           
                            
                        </div>
                      
                    </div>
                        <div class="container-contact100">
        <div class="wrap-contact100">

            <form class="contact100-form validate-form" method="post" action="">
                <span class="contact100-form-title">

                    Create Account
                </span>

               
                <div class="wrap-input100 validate-input bg1 " >
                    <span class="label-input100">Nom</span>
                    <input class="input100" type="text"  name="nom"  placeholder="Enter name " required>
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Prenom</span>
                    <input class="input100" type="text"  name="prenom" >
                </div>
                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Adresse mail</span>
                    <input class="input100" type="mail"  name="mailclient"  >
                </div>
                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Numero telephone</span>
                    <input class="input100" type="number"  name="tel"  >
                </div>
<div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">adresse</span>
                    <input class="input100" type="text" name="adresse"  placeholder="adresse  " >
                    <br>
                </div>
<div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Mot de passe</span>
                    <input class="input100" type="password" name="motdepasse"  placeholder="password  " >
                    <br>
                </div>

                <div class="g-recaptcha" data-sitekey="6LdC69oaAAAAAC_EuJDdPsMv4paqM92KH7n0OTXp"></div>

                <div class="container-contact100-form-btn">
                    <div class="contact100-form-btn" >
                    
                   
                     <span>
                        
                           <button type="submit" name="submit" value="submit"  >Submit</button>
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                        </div>
                                            
                </div>
                
                    </button>
                </div>
            </form>
        </div>
    </div>




            



            <footer>
                <div class="container">
                    <div class="top-footer">
                        <div class="row">
                            
                           
                        </div>
                    </div>
                    <div class="main-footer">
                        <div class="row">
                           
                            
                            
                            
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <p>Copyright © 2084 <a href="#">PRO.K</a></p>
                    </div>
                    
                </div>
            </footer>

        <script src="../../js/vendor/jquery-1.11.0.min.js"></script>
        <script src="../../js/vendor/jquery.gmap3.min.js"></script>
        <script src="../../js/plugins.js"></script>
        <script src="../../js/main.js"></script>

    </body>
</html>