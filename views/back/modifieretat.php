<?php
require_once '../../controllers/reclamationc.php';
require_once '../../entity/reclamation.php';
$reclamationc = new reclamationc();
if (isset($_POST['modifier'])){
 

if ( isset($_POST['etatrec'])) {


    $idrec=$_GET['idrec'];


    $reclamationc->modifier($_POST['etatrec'],$idrec);
    //echo $_POST['id_reclamation'] ;
header("Location: reclamationeeljen.php");
}
}
?>


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
                <a class="navbar-brand" href="index.php">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
<a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
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
                       
                        <h5>Welcome Med Amine Rahmouni , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <?php

        if (isset($_GET['idrec'])) {

            $result = $reclamationc->recupereretat($_GET['idrec']);
            if ($result !== false) {
    ?>
                    <div class="panel panel-default">
                        <form method="post">
                        <div class="panel-heading">
                             Reclamation
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                        <tr>
                                            <th>idrec</th>
                                            <th>nomc</th>
                                            <th>emailc</th>
                                            <th>sujetrec</th>
                                            <th>messagerec</th>
                                            <th>etatrec</th>
                                            <th>iduser</th>

                                        </tr>
                                
                                    
                                    
                                    <tr>
                                        
                                    <td>  <input type="text" name="idrec" value="<?= $result['idrec'] ?>" > </td>
                                    <td>  <input type="text" name="nomc" value="<?= $result['nomc'] ?>" > </td>
                                    <td>  <input type="mail" name="emailc" value="<?= $result['emailc'] ?>" > </td>
                                    <td>  <input type="text" name="sujetrec" value="<?= $result['sujetrec'] ?>" > </td>
                                    <td>  <input type="text" name="messagerec" value="<?= $result['messagerec'] ?>" > </td>
                                    <td>  <input type="text" name="etatrec" value="<?= $result['etatrec'] ?>" > </td>
                                    <td>  <input type="text" name="iduser" value="<?= $result['iduser'] ?>" > </td>
                                    
                                    
                                    <td><input  type="submit" name="modifier" class="contact100-form-btn" value="modifier"></td>
                                   


                                    </tr>    
                                    
                                    <?php
        }
    }
        else {
            header('Location:reclamationeeljen.php');
        }

    ?>
                                </table>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
               
    </div>
    
             <!-- /. PAGE INNER  -->
            
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
