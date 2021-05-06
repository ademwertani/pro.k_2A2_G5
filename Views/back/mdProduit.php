<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include "../../controllers/produitC.php";

$produitC = new produitC();
$listeproduit = $produitC->afficherProduit();

?>


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
                <a class="navbar-brand" href="index.html">Pro.K</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <h2> liste des produits</h2>
                        <h5>Welcome Firas Ben Hadj Alouane , Love to see you back. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

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
                                            <th>image</th>
                                            <th> categorie </th>
                                            <th> supprimer </th>
                                            <th> modiifer </th>
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
        


                    


                                        <?php
                                        
                                        
                                         foreach ($listeproduit as $l  ) { ?>
                                            <tr>
                                                <td> <?php echo $l['id'] ?> </td>
                                                <td> <?php echo $l['nom'] ?> </td>
                                                <td> <?php echo $l['description'] ?> </td>
                                                <td> <?php echo $l['etat'] ?> </td>
                                                <td> <?php echo $l['dateFabrication'] ?> </td>
                                                <td> <?php echo $l['prix'] ?> </td>

                                                <td> <img src="./uploads/<?= $l['image'] ?>" style="width:100px"> </td>


                                               
                                                <td>
                                            <?php echo $l['categorie'] ?>
                                               </td>
                                                




                                                <td>
                                                    <form method="POST" action="supprimerproduit.php">
                                                        <input type="submit" name="supprimer" value="supprimer" class="btn btn-success" onclick="validateSubmit()">
                                                        <input type="hidden" value="<?PHP echo $l['id']; ?>" name="id">

                                                    </form>

                                                    <script>
                                                        function validateSubmit() {
                                                            result = confirm("Are you sure you want to delete this form ?");
                                                            if (result) {
                                                                $('#form').submit();


                                                            }
                                                        }
                                                    </script>



                                                </td>

                                                <td>
                                                    <button class="btn btn-danger"> <a style="color:white;" target="_blank" href="modifierproduit.php?id=<?php echo $l['id']; ?>"> Modifier </a>
                                                    </button>
                                                </td>








                                            </tr>
                                        <?php } ?>

                                    </table>
                                    <p><a href="index.php" target="_blank">Chercher</a></p>
                                    <p><a href="genratepdf.php" target="_blank">Generate PDF</a></p>

                                </div>

                            </div>
                        </div>
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
                    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
                    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#dataTables-example').dataTable();
                        });
                    </script>
                    <!-- CUSTOM SCRIPTS -->
                    <script src="assets/js/custom.js"></script>


</body>

</html>