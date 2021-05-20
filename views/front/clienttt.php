<?php

require_once '../../controllers/clientc.php';
require_once '../../entity/client.php';
session_start();
$clientc = new clientc();
$client = $clientc->afficherclient();
if(isset($_POST['submit']))
    {
        $client=$clientc->tria();
       
    }
    elseif(isset($_POST['submit2']))
    {
        $client=$clientc->trid();
    }
if (isset($_GET['idc'])) {
    $clientc->supprimerclient($_GET['idc']);
    header('Location:clienttt.php');
    
    

}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="../../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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

<a href="logout.php" class="btn btn-danger square-btn-adjust" >Logout</a></div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                  
                    <li>
                        <a  href="clienttt.php"><i class="fa fa-qrcode fa-3x"></i> Tab client</a>
                    </li>
                    <li>
                        <a  href="reclamationeeljen.php"><i class="fa fa-qrcode fa-3x"></i> Tab reclamation</a>
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             client
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <p> <form method="POST" action="">
                <input type="submit" name="submit" value="trierclient" class="contact100-form-btn" >
                <input type="submit" name="submit2" value="trierclientd" class="contact100-form-btn">
                 

               </form> </p>    
                            
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>idc</th>
                                            <th>nom</th>
                                            <th>prenom</th>
                                            <th>mailclient</th>
                                            <th>tel</th>
                                            <th>adresse</th>
                                            <th>motdepasse</th>
                                            

                                        </tr>
                                    </thead>
                                    <?php
                                    foreach ($client as $client)
                                    {

                                    
                                    ?>
                                    <tbody>
                                    <tr>
                                        
                                    <td>  <?=  $client['idc'] ?> </td>
                                    <td>  <?=  $client['nom'] ?> </td>
                                    <td>  <?=  $client['prenom'] ?> </td>
                                    <td>  <?=  $client['mailclient'] ?> </td>
                                    <td>  <?=  $client['tel'] ?> </td>
                                    <td>  <?=  $client['adresse'] ?> </td>
                                    <td>  <?=  $client['motdepasse'] ?> </td>
                                    
                                    <td><a type="button" class="contact100-form-btn" href = "clienttt.php?idc=<?= $client['idc'] ?>">Supprimer</a></td>
                                    <td><a type="button" class="contact100-form-btn" href = "modifier.php?idc=<?= $client['idc'] ?>">Modifier</a></td>
                                    <td><a type="button" class="contact100-form-btn" href = "envoyer_des_mails.php?mailclient=<?= $client['mailclient'] ?>">Envoyer un mail</a></td>
                                    </tr>    
                                    </tbody>
                                    <?php
                                    }
                                    ?>
                                </table>
                                <td><a type="submit" class="contact100-form-btn" href = "pdf.php">PDF</a></td>
                               
                                
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
    <script src="../../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    
    <script src="../../assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="../../assets/js/custom.js"></script>
    
   
</body>
</html>