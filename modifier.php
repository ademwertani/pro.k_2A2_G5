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
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="index.html">Binary admin</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.jpg" class="user-image img-responsive" />
                    </li>

                    <li>
                        <a href="modifier.php"><i class="fa fa-edit fa-3x"></i> modifier un évenements </a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> manage events<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>

                                <a href="ajouter un evenement.php">ajouter un évenement</a>
                            </li>
                            <li>
                                <a href="#">supprimer un évenement</a>
                            </li>
                            <li>
                                <a href="#">chercher un évenement<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                    
                </ul>
            </div>

        </nav>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        




                        <form action="conn1.php" method="POST">

<h1>modification d'un client:</h1>
<label for="idE">
			Entrez l'id du client que vous voulez modifier:
			<input type="text" name="idE" id="idE">
		</label><br><br>
<label for="placeE">
    Entrez la place que vous voulez modifier:
    <input type="text" name="placeE" id="placeE">
</label><br><br>

<p>
     <label for="dateE">Set date:</label>
     <input type="date" id="dateE" name="dateE" value="2018-07-22">
 </p>


 <p>
                                <br />
                                <label for="tempE">Choose a time for your event:</label>

                                <input type="time" id="tempE" name="tempE"  >

                                <small>Office hours are 9am to 6pm</small>
                                >
                            </p>



                            <p>
                                type d'évenement<br />
                                <select name="typeE">
                                    <option value="insti">COOKING</option>
                                    <option value="parti">KITCHEN EQUIPMENT </option>
                                    <option value="profe">THE RECIPES </option>
                                    <option value="insti">DRINKS</option>
                                </select>
                            </p>

                            <p>
                                adresse :<br />
                                <input type="text" name="adresseE" value="" />
                            </p>


<input type="submit" value="Modifier">

</form> 









                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. NAV SIDE  -->

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


     