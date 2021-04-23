<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php







include "../../controllers/categoriecontroller.php";
$categorieC = new categoriecontroller();
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
                        <h2>Recipes list</h2>
                        <h5>Welcome Oumayma Cherif , Love to see you back. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Liste des categories
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <tr>
                                            <th>id</th>
                                            <th>nom</th>
                                            <th> supprimer </th>
                                            <th> modiifer </th>
                                        </tr>


                                        <?php foreach ($listecategorie as $l) { ?>
                                            <tr>
                                                <td> <?php echo $l['id'] ?> </td>
                                                <td> <?php echo $l['nom'] ?> </td>



                                                <td>
                                                    <form method="POST" action="supprimerCategorie.php">
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
                                                    <button class="btn btn-danger"> <a style="color:white;" target="_blank" href="modifierCategorie.php?id=<?php echo $l['id']; ?>"> Modifier </a>
                                                    </button>
                                                </td>








                                            </tr>
                                        <?php } ?>

                                    </table>
                                </div>

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