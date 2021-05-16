<?php 
  
  include '../../controllers/reclamationc.php';
  include_once '../../controllers/clientc1.php';
  session_start();
  
  $reclamationc =  new reclamationc();
  if (isset( $_POST['nomc']) && isset($_POST['emailc']) && isset($_POST['sujetrec']) && isset($_POST['messagerec']) && isset($_SESSION['idc'])   ) {
    
    $reclamation = new reclamation( $_POST['nomc'], $_POST['emailc'], $_POST['sujetrec'], $_POST['messagerec'], $_SESSION['idc']);
  $reclamationc->ajouterreclamation($reclamation);
  header('Location:reclamationnn.php');
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
        <title>réclamation - PRO.K Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/font-awesome.css">
        <link rel="stylesheet" href="../css/templatemo_style.css">
        <link rel="stylesheet" href="../css/templatemo_misc.css">
        <link rel="stylesheet" href="../css/flexslider.css">
        <link rel="stylesheet" href="../css/testimonails-slider.css">

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
                                    <a href="index.php">Home</a>
                                    <a href="createaccount.php">create account</a>
                                    <a href="login.php">Login</a>
                                    <a href="logout.php">Logout</a>
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
                                    <a href="#"><img src="../images/logo.png" title="Grill Template" alt="Grill Website Template" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a href="recipes.html">Recipes</a></li>
                                        <li><a href="reclamationnn.php">Reclamation</a></li>
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
                                <h2>réclamation</h2>
                                <span>Home / <a href="reclamationnn.php">réclamation </a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="product-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Feel free to send a message</h2>
                                <img src="../images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div id="reclamation">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">  
                                            <div class="message-form">
                                                <form action="" method="post" class="send-message">
                                                    <div class="row">
                                                    <div class="name col-md-4">
                                                        <input type="text" name="nomc" id="name" placeholder="Name"required />
                                                    </div>
                                                    <div class="email col-md-4">
                                                        <input type="email" name="emailc" id="email" placeholder="Email"required />
                                                    </div>
                                                    
                                                    <div class="subject col-md-4">
                                                        <input type="text" name="sujetrec" id="sujetrec" placeholder="Subject"required />
                                                    </div>
                                                    </div>
                                                    <div class="row">        
                                                        <div class="text col-md-12">
                                                            <textarea name="messagerec" placeholder="Message"required></textarea>
                                                        </div>   
                                                    </div>   
                                                                            
                                                    <div class="send">
                                                        <button type="submit" name="submit">Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="info">
                                                
                                                <ul>
                                                    <li><i class="fa fa-phone"></i>666-420-6969</li>
                                                    <li><i class="fa fa-globe"></i>420 Avenue Eeljen aalayhi salem, men ghadi, Libyaaaaaaa</li>
                                                    <li><i class="fa fa-envelope"></i><a href="#">prok@eeljen.com</a></li>
                                                </ul>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                         
                </div>
            </div>
            <div class="panel panel-default">
                        <div class="container">

  
                        <div class="panel-body">
                            <div class="table-responsive">
                               
                            </div>
                            
                        </div>
                    </div>
            


        <script src="../js/vendor/jquery-1.11.0.min.js"></script>
        <script src="../js/vendor/jquery.gmap3.min.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>

        
                
        <script>
		
		var map;
		
        function initialize()
        {
			var map_options = {
			  center: new google.maps.LatLng(16.8496189,96.1288854),
			  zoom: 15,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			var map = new google.maps.Map(document.getElementById("googleMap"), map_options);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
		google.maps.event.addDomListener(window, "resize", function() 
		{
		 	var center = map.getCenter();
		 	google.maps.event.trigger(map, "resize");
		 	map.setCenter(center); 
		});
        </script>

    </body>
</html>