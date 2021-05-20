<?PHP
    include "C:/xampp/htdocs/pro.k/entity/packet.php";
    include "C:/xampp/htdocs/pro.k/controllers/pack_bd.php";

		if (isset($_GET['id'])){
			$packetC=new packet_bd();
			$result=$packetC->recherchePack($_GET['id']);
			foreach($result as $row){
			$ReferencePack=$row['ReferencePack'];
			$identifiantpack=$row['identifiantpack'];
			$Datedebutpack=$row['Datedebutpack'];
			$Datefinpack=$row['Datefinpack'];
			$prix=$row['prix'];
           $image=$row['image'];
       
              
        ?>
       

<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="/promo/assets1/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="/promo/assets1/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="/promo/assets1/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
            
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.jpg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
              <a href="dhbord.html"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
            </li>
            <li>
              <a href="affichage.php"><i class="fa fa-dashboard fa-2x"></i> promo</a>
            </li>
            <li>
              <a href="affichage2.php"><i class="fa fa-dashboard fa-2x"></i> pack</a>
            </li>
            <li>
              <a href="rdreviews.php"><i class="fa fa-qrcode fa-2x"></i>Reviews</a>
            </li>
            <li>
              <a href="chart.php"><i class="fa fa-bar-chart-o fa-2x"></i> Stat/Rate</a>
            </li>
            <li>
              <a  href="clienttt.php"><i class="fa fa-qrcode fa-3x"></i> Tab client</a>
          </li>
       

          <li>
              <a  href="reclamationeeljen.php"><i class="fa fa-qrcode fa-3x"></i> Tab reclamation</a>
          </li>
  
            <li>
              <a href="addrecipe.php"><i class=" fa fa-edit fa  fa-2x  "></i>
                Recipes </a>
  
  
            </li>
            <li>
              <a href="addcategories.html"><i class=" fa fa-edit fa-2x "></i>
                Categories </a>
  
            </li>
            <li>
              <li>
                <a href="ajouterProduit1.php"><i class="fa fa-dashboard fa-2x"></i> produit</a>
              </li>
              <li>
                <a href="addcategoriesP.html"><i class="fa fa-dashboard fa-2x"></i>Categories</a>
              </li>
              <li>
                <a href="table.php"><i class="fa fa-dashboard fa-2x"></i> commande</a>

              </li>
             <li>
                          <a href="modifier.html"><i class="fa fa-edit fa-3x"></i> modifier un évenements </a>
                      </li>
                      <li>
                          <a href="participants.html"><i class="fa fa-edit fa-3x"></i> afficher les participants </a>
                      </li>
  
  
                      <li>
                          <a href="#"><i class="fa fa-sitemap fa-3x"></i> gerer les evenements<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
  
                                  <a href="ajouter un evenement.html">ajouter un évenement</a>
                              </li>
                              <li>
                                  <a href="suprimer un evenement.html">supprimer un évenement</a>
                              </li>
                              <li>
                                  <a href="chercher un evenement.html">chercher un évenement</a>
                              </li>



                              <li>
                                <a href="ajouterProduit1.php"><i class="fa fa-dashboard fa-2x"></i> produit</a>
                              </li>
                              <li>
                                <a href="addcategoriesP.html"><i class="fa fa-dashboard fa-2x"></i>Categories</a>
                              </li>
                              <li>
                                <a href="table.php"><i class="fa fa-dashboard fa-2x"></i> commande</a>
                              </li>
                             
                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a class="active-menu"  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>pack Page</h2>   
                        <h5>Welcome mazen , Love to see you back. </h5>


                        <div class="container-contact100">
                            <div class="wrap-contact100">
  

                                <form class="contact100-form validate-form"  method="POST" >
                                    <span class="contact100-form-title">
                    
                                       
                                    </span>
                    
                                    <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                                        <span class="label-input100">Reference Pack</span>
                                        <input  class="input100" type="text" name="ReferencePack" value="<?PHP echo $ReferencePack ?>">
                                    </div>
                    
                                    <div class="wrap-input100 validate-input bg1 " >
                                        <span class="label-input100">identifiant pack</span>
                                        <input id="identifiantpack" class="input100" type="text" name="identifiantpack" value="<?PHP echo $identifiantpack ?> ">
                                    </div>
                    
                                    <div class="wrap-input100 bg1 rs1-wrap-input100">
                                        <span class="label-input100">Date debut promotion</span>
                                        <input  class="input100" type="date" name="Datedebutpack" value="<?PHP echo $Datedebutpack ?>" >
                                    </div>
                                    <div class="wrap-input100 bg1 rs1-wrap-input100">
                                        <span class="label-input100">Date fin promotion</span>
                                        <input  class="input100" type="date" name="Datefinpack"value=" <?PHP echo $Datefinpack ?>">
                                    </div>
                                   <div class="wrap-input100 bg1 rs1-wrap-input100">
                                        <span class="label-input100">prix</span>
                                        <input  class="input100" type="text" name="prix"  value="<?PHP echo $prix ?>" >
                                    </div>
                                    

                                    
                                    <div class="wrap-input100 bg1 rs1-wrap-input100">
                                    <input type="hidden" name="Id" value="<?PHP echo $row['identifiantpack'];?>">

                                    </div>
                                    <div class="container-contact100-form-btn">
                                    <button type="submit" name="modifier" value="Modifier"   >modifer</button>
                                    </div>
                                    <div class="container-contact100-form-btn">
                                        <button class="contact100-form-btn">
                                            <span>
                                                Annuler
                                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>





                        <a href="affichage2.php"> afficher pack </a>


                    
                                    </main>
                                    <footer class="py-4 bg-light mt-auto">
                                        <div class="container-fluid">
                                            <div class="d-flex align-items-center justify-content-between small">
                                                <div class="text-muted">Copyright &copy; Your Website 2020</div>
                                                <div>
                                                    <a href="#">Privacy Policy</a>
                                                    &middot;
                                                    <a href="#">Terms &amp; Conditions</a>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="/promo/assets1/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="/promo/assets1/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="/promo/assets1/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="/promo/assets1/js/custom.js"></script>
    
   
</body>
</html>
<?PHP
			}
		}
		if (isset($_POST['modifier'])){
            $packet=new $packet($_POST['ReferencePack'],$_POST['identifiantpack'],$_POST['Datedebutpack'],$_POST['Datefinpack'],$_POST['prix'],$_POST['image']);

            $packetC=new packet_bd();
			$packetC->modifierpack($packet,$_POST['Id']);
            header('Location: affichage2.html');
		
			
		}
		?>