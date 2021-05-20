<?php
include '../../controllers/panierC.php';
$panierC=new cart();
$listeCommande=$panierC->afficherCommande();

?>
</tbody>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
font-size: 16px;"> Last access : 22 april 2021 &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Table commandes</h2>   
                        <h5>Bienvenue Dhaker Badri , ravi de te revoir </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">

                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Commandes
                        </div>
                                   
                                                
                                                 <form action="" method="POST" name="ajout">
                                                <label>Date</label>
                                                <input type="date" name="Daate" value="Enter the date " required>
                                                <label>Prix</label>  
                                                <input type="float" name="Prix" placeholder= "Enter the price" required>
                                                <button type="submit" class="btn btn-primary" name="save">Ajouter</button>
                                               </form>

                                     
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id Commande</th>
                                            <th>Id Client</th>
                                            <th>Prix Total</th>
                                            <th>Date de Création</th>
                                            <th>Date de Modification</th>
                                            <th>Etat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                         foreach ($listeCommande as $row) {

                                             ?>


                                             <tr>
                                                 <th><?php echo $row['id']; ?></th>

                                                 <th><?php echo $row['customer_id']; ?></th>
                                                 <th><?php echo $row['total_price']; ?> Dt</th>
                                                 <th><?php echo $row['created']; ?></th>
                                                 <th><?php echo $row['modified']; ?></th>
                                                 <?php if ($row['status'] == 1 ):?>
                                                     <th><a href="gererCommande.php?action=confirmer&id=<?php echo $row['id']; ?>">confirmer</a></th>
                                                 <?php endif;?>
                                                 <?php if ($row['status'] == 2 ): ?>
                                                     <th><?php echo 'terminé'; ?></th>

                                                 <?php endif;?>
                                             </tr>

                                    </tbody>
                                    <?php } ?>
                                </table>
                      <div class="container">
                                     <br />
                                     <h2 align="left">Rechercher des commandes</h2><br />
                                     <div class="form-group">
                                      <div class="input-group">
                                       <span class="input-group-addon">Search</span>
                                       <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
                                      </div>
                                     </div>
                                     <br />
                                     <div id="result"></div>
                         </div>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                         
                        <script>
                          $(document).ready(function(){

                           load_data();

                           function load_data(query)
                           {
                            $.ajax({
                             url:"fetch.php",
                             method:"POST",
                             data:{query:query},
                             success:function(data)
                             {
                              $('#result').html(data);
                             }
                            });
                           }
                           $('#search_text').keyup(function(){
                            var search = $(this).val();
                            if(search != '')
                            {
                             load_data(search);
                            }
                            else
                            {
                             load_data();
                            }
                           });
                           });
                        </script>
             
                <div class="col-md-6">
             
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
   
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
