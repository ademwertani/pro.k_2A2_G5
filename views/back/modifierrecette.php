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
                    <a href="rdreviews.php"><i class="fa fa-qrcode fa-2x"></i>Reviews</a>
                    </li>
                    <li>
                        <a href="chart.html"><i class="fa fa-bar-chart-o fa-2x"></i> Stat/Rate</a>
                    </li>

                    <li>
                        <a href="addrecipe.php"><i class=" fa fa-edit fa  fa-2x  "></i>
                            Recipes </a>


                    </li>
                    <li>
                        <a href="addcategories.html"><i class=" fa fa-edit fa  "></i>
                            Categories </a>

                    </li>

            </div>


        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Recipes</h2>
                        <h5>Welcome Oumayma Cherif , Love to see you back. </h5>

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

                                        <!-- recupere l'id-->
                                        <?php
                                        include "../../entity/recette.php";
                                        include "../../controllers/recettecontroller.php";

                                        if (isset($_GET['id'])) {
                                            $recettec = new recettecontroller();
                                            $result = $recettec->findById($_GET['id']);

                                            foreach ($result as $row) {
                                                $id = $row['id'];
                                                $nom = $row['nom'];
                                                $description = $row['description'];
                                                $categorie = $row['nom_cat'];
                                                $idc=$row['idc'];
                                            }
                                        }

                                        ?>

                                        <table>
                                            <form action="post_mdrec.php" method="POST" enctype="multipart/form-data">

                                                <h3>Modifier recette; <?PHP echo $id ?></h3>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control has-feedback-right" id="inputSuccess4" name="id" placeholder="id" value="<?php echo $id ?>" readOnly="">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label style="font-weight: bold"> nom </label>
                                                        <input type="text" class="form-control" name="nom" placeholder="" required="" value="<?php echo $nom ?>" style="width:500px">
                                                        </br>
                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td>
                                                        <label style="font-weight: bold"> categorie </label>
                                                        <input type="text" class="form-control" name="idc" readOnly=""  required="" value="<?php echo $idc ?>" style="width:500px"> <?php echo $categorie ?>
                                                        </br>
                                                    </td>
                                                </tr>
                                    </br>





                                                <tr>
                                                    <td>
                                                        <label style="font-weight: bold"> description </label>
                                                        <input type="text" class="form-control" name="description" placeholder="" required="" value="<?php echo $description ?>" style="width:500px">
                                                        </br>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <label style="font-weight: bold"> Image </label>
                                                        <input type="file" class="form-control" name="image" placeholder="" required="" value="<?php echo $nom ?>" style="width:500px">
                                                        </br>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <button type="submit" value="modifier" class="btn btn-info">modifier</button>
                                                    </td>
                                                </tr>
                                            </form>
                                        </table>
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

            <script>
                function validateSubmit() {
                    result = confirm("Are you sure you want to submit this form ?");
                    if (result) {
                        $('#form').submit();
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