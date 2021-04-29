<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
                    include "../../controllers/produitC.php";
                    $produit1C=new produitC();
                    $listeproduit=$produit1C->trierPr();
                    
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
                        <h2>Listes des Produits</h2>
                        <h5>Welcome Firas Ben Hadj Alouane , Love to see you back. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />



                                        <form  action="tri_produit.php">
            <button   type="submit" name="trier" class="btn btn btn-primary btn-rounded float-right" data-animation="fadeInUp" data-delay="1s" data-duration="500ms" >trier la liste</button>
        </form>
        


                    


        
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Nos produits triées</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="ajoutproduit.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Ajouter produit</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-11">

                <div class="table-responsive">
                    
                   
		<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
			
			<tr>
				<th class="sorting">ID</th> 
				<th>Nom</th>
				<th>Desciption</th>
				<th>etat</th>
                <th>Date de fabrication</th>
                <th>prix</th>
				<th>categorie</th>
                
				
			</tr>

			<?PHP
				foreach($listeproduit as $row){
			?>
				<tr>
					<td><?PHP echo $row['id']; ?></td>
					<td><?PHP echo $row['nom']; ?></td>
                    <td><?PHP echo $row['description']; ?></td>
					<td><?PHP echo $row['etat']; ?></td>
                    <td><?PHP echo $row['dateFabrication']; ?></td>
                    <td><?PHP echo $row['prix']; ?></td>
                    <td><?PHP echo $row['categorie']; ?></td>
					
					
					
				</tr>
			<?PHP
				}
			?>
		</table>
                </div>
            </div>
        </div>
    </div>
</div>




                                       

                                                    <script>
                                                        function validateSubmit() {
                                                            result = confirm("Are you sure you want to delete this form ?");
                                                            if (result) {
                                                                $('#form').submit();


                                                            }
                                                        }
                                                    </script>



                                                </td>

                                             








                                            </tr>
                                        

                                    </table>
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