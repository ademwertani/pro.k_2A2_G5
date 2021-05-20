<?php 
include "../../controllers/recettecontroller.php";


$db  = Config::getConnexion();

$qry = "SELECT COUNT(recette.id), recette.idc, categorie.nom AS nom_cat    
FROM recette LEFT JOIN categorie
    ON categorie.id = recette.idc GROUP BY categorie.nom
            ";
            

$query=$db->prepare($qry); 
$query->execute();  




  $result = $query->fetchAll();

       
              
?>



﻿<!DOCTYPE html>
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
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link
      href="http://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
      type="text/css"
    />
  </head>
  <body>
    <div id="wrapper">
      <nav
        class="navbar navbar-default navbar-cls-top"
        role="navigation"
        style="margin-bottom: 0"
      >
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".sidebar-collapse"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Pro.K</a>
        </div>
        <div
          style="
            color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;
          "
        >
          Last access : 30 May 2014 &nbsp;
          <a href="login.php" class="btn btn-danger square-btn-adjust"
            >Logout</a
          >
        </div>
      </nav>
      <!-- /. NAV TOP  -->
      <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li class="text-center">
              <img
                src="uploads/997116.png"
                class="user-image img-responsive"
              />
            </li>

            <li>
            <a href="index.html"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
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
                        <a href="modifier.html"><i class="fa fa-edit fa-3x"></i> modifier un évenements </a>
                    </li>
                    <li>
                        <a href="participants.html"><i class="fa fa-edit fa-3x"></i> afficher les participants </a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> manage events<span class="fa arrow"></span></a>
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

        </div>
      </nav>
      <!-- /. NAV SIDE  -->
      <div id="page-wrapper">
        <div id="page-inner">
          <div class="row">
            <div class="col-md-12">
              <h2>Stats / Rate</h2>
              <h5>Welcome Oumayma Cherif , Love to see you back.</h5>
            </div>
          </div>
          <!-- /. ROW  -->
          <hr />
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['cat', 'nbr'],
        
         

        <?php                       
          foreach ($result as $r)

              {
                

                echo "['".$r["nom_cat"]."', ".$r["COUNT(recette.id)"]."],";  
  

              }
              
              ?>

     


        ]);

        var options = {
          title: 'Categories & Recipes'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


    <div id="piechart" style="width: 900px; height: 500px;"></div>
  

          <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
      </div>
      <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
  </body>
</html>

 
 
  
  






          
            
         
