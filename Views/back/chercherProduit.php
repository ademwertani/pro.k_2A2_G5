<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">


<?php

include "../../controllers/produitC.php";


$produitC = new produitC();
$listeproduit= $produitC->afficherProduit();




?>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="index.html">Pro.K</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>


                    <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="tab-panel.html"><i class="fa fa-qrcode fa-2x"></i>Comments</a>
                    </li>
                    <li>
                        <a href="chart.html"><i class="fa fa-bar-chart-o fa-2x"></i> Stat/Rate</a>
                    </li>

                    <li>
                        <a href="ajouterProduit1.php"><i class=" fa fa-edit fa  fa-2x  "></i>
                            Produits </a>


                    </li>
                    <li>
                        <a href="addcategories.html"><i class=" fa fa-edit fa-2x  "></i>
                            Categories </a>

                    </li>

            </div>


        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Produits</h2>
                        <h5>Welcome Firas Ben Hadj Alouane , Love to see you back. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form Element Examples
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">

                                        
                                        <div class="row">
                                            div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title"> Recherche Produits</h4>
            </div>

            <div class="col-sm-3 col-1">

                <form action="" method = 'POST'>
                    <div >
                        <div class="col-65">
                            <input type = "text" name = "type" placeholder="entrer le produit ">
                            <input type = "submit" value = "Chercher" class="btn btn btn-primary btn-rounded float-right" name ="search">
                        </div>
                    </div>
                    <br>

                </form>
            </div>

        </div>
            <div class="col-md-6">

                 <?php
                if (isset($_POST['type']) && isset($_POST['search'])){
                    $result = $produitC-> rechercher($_POST['type']);
                    if ($result) {
                        ?>
                        <section class="container">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table">
                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                    <td><?=
                                            $result ['nom' ] ;
                                            ?></td>
                                        <td>
                                            <?= $result['description']
                                            ?></td>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <a href = "mdproduit.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> >listes produits</a>

                            </div>
                        </section>
                        <?php
                    }
                    else {
                        echo "<div> INTROUVABLE !!! </div>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <h3>More Customization</h3>
                    <p>
                        For more customization for this template or its components please visit official bootstrap
                        website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click
                            here</a> . We hope you will enjoy our template. This template is easy
                        to use, light weight and made with love by binarycart.com
                    </p>
                </div>
            </div>

            <script>
                function validateSubmit() {
                    result = confirm("Are you sure you want to submit this form ?");
                    if (result) {
                        $('#form').submit();
                        //why use jquery? so oldskool  idkk isnt mine
                        //  good girl
                        // document.querySelector("#form").submit(); EZ NO JQUERY NOTHING
                    }
                }
            </script>

            <!-- i see this next time i go suicide -->


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
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>