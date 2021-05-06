<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">


<?php

include "../../controllers/categorieC.php";


$categorieC = new categorieC();
$listecategorie = $categorieC->afficherCategorie();




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
font-size: 16px;"> Last access : 30 May 2021 &nbsp; <a href="../front/Login/logout.php" class="btn btn-danger square-btn-adjust">Logout</a>
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
                        <a href="addrecipe.php"><i class=" fa fa-edit fa  fa-2x  "></i>
                            Produit </a>


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
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Ajouter un Produit</h3> <br>
                                        <form id="formajouterproduit" method="POST" action="ajouterproduit2.php" enctype="multipart/form-data">

                                            <label>Nom de Produit</label>
                                            <br> <input type="text" class="form-control" name="nom" required="" placeholder="veuillez entrer le nom" value="" style="width:500px">
                                            </br>

                                            <label>Description</label>
                                            <br> <input type="text" class="form-control" name="description" required="" placeholder="description" value="" style="width:500px">
                                            </br>

                                            <label>etat</label>
                                            <br> <input type="text" class="form-control" name="etat" required="" placeholder="etat" value="" style="width:500px">
                                            </br>

                                            <label>Date de Fabrication</label>
                                            <br> <input type="Date" class="form-control" name="dateFabrication" required="" placeholder="veuillez entrer une date" value="" style="width:500px">
                                            </br>



                                            <label>image</label>
                                            <br> <input type="file" class="form-control" name="image" id="image" required="" placeholder="image" value="" accept="*/image" style="width:500px">
                                            </br>

                                            <label>Prix</label>
                                            <br> <input type="text" class="form-control" name="prix" required="" placeholder="veuillez entre un prix " value="" style="width:500px">
                                            </br>


                                            <label>categorie</label>
                                            <select id="nomcategorie" value="" name="categorie">
                                                <?php foreach ($listecategorie as $l) {  ?>

                                                <option value="<?php echo $l['id'] ?>"> <?php echo $l['nom']; ?></option>

                                            

                                                <?php } ?>

                                            </select>

                                            </br>






                                            <button type="submit" class="btn btn-default" style="float:right;" value="submit" onclick="validateSubmit()" name="submit">Submit Button</button>


                                            <script>
                                                function validateSubmit() {
                                                    result = confirm("Are you sure you want to submit this form ?");
                                                    if (result) {
                                                        $('#form').submit();


                                                    }
                                                }
                                            </script>


                                        </form>
                                    </div>


                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
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