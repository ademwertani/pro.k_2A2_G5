<?php
require_once '../../config.php';
require_once '../../entity/client.php';
require_once '../../controllers/clientc.php';
if (isset($_POST['email'])){
    
     $email_client=$_POST['email'];
    $mot_passe=$_POST['password'];
    
    $sql="SELECT * FROM client WHERE mailclient='" . $email_client . "' && motdepasse = '". $mot_passe."'";
    $db = config::getConnexion();
    try{

        $query=$db->prepare($sql);
        $query->execute();
        $count=$query->rowCount();
        if($count==1){
            session_start();
            $user=$query->fetch();
            $_SESSION['email'] = $user['mailclient'];
            $_SESSION['mot_de_passe'] =  $user['motdepasse'];
            $_SESSION['idc'] = $user['idc'];
           
echo $user['typeuser'];
            if ($user['typeuser']==0)
            {header('Location:index.php');    }   

            else if ($user['typeuser']==1)
             { header('Location:clienttt.php');}        }

    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }

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
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/eeljeya.css">
        <link rel="stylesheet" href="../../css/font-awesome.css">
        <link rel="stylesheet" href="../../css/templatemo_style.css">
        <link rel="stylesheet" href="../../css/templatemo_misc.css">
        <link rel="stylesheet" href="../../css/flexslider.css">
        <link rel="stylesheet" href="../../css/testimonails-slider.css">

      <!--  <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>-->
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

            <link href="..///maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="..///maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="..///cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->
            
            
            <html>
              <head>
            
              <link href="..///maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="..///maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="..///cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->
              </head>
            <body id="LoginForm">
            <div class="container">
            <h1 class="form-heading">login Form</h1>
            <div class="login-form">
            <div class="main-div">
                <div class="panel">
               <h2>Login</h2>
               <p>Please enter your email and password</p>
               </div>
                <form method="POST" id="Login">
            
                    <div class="form-group">
            
            
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email Address">
            
                    </div>
            
                    <div class="form-group">
            
                        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
            
                    </div>
                    <div class="forgot">
                    <a href="reset.html">Forgot password?</a>
            </div>
                    <button type="submit" class="btn btn-primary">Login</button>
            
                </form>
                </div>
            <p class="botto-text"> Designed by Sunil Rajput</p>
            </div></div></div>
            
            
            </body>
            </html>
            
          
<script>

function test() {
if((document.getElementById('adresse').value=='')||(document.getElementById('pass').value==''))
{
alert("Champ non renseigné" );

} 
else 
{
   
 var chaine=document.getElementById('adresse').value;
 var position = chaine.indexOf("@esprit.tn"); 
 var password=document.getElementById('pass').value; 

 var pospt=chaine.indexOf(".");
       var prenom=chaine.substring(0,pospt);
       var posa=chaine.indexOf("@");
       var nom=chaine.substring(pospt+1,posa);

if(position==-1)
 {
   alert("Adresse fausse !" );
 }                                               
else if(password.length<=8) 
 {
   alert("password inferieur a 8"); 
 }  
else 

alert("Bienvenu "+ prenom +" "+ nom  ); 
window.location.href ='index.php';



}

   }




</script>

            


            <div id="timeline-post">
                <div class="container">
                    
                    
                    
                    
                    <div class="space50"></div>
                    
                   
                                 
                            </div>
                           
                             
                        </div>
                    </div>
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