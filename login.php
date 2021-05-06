<?php 
require_once 'config.php';
if (isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM loginform WHERE User='" . $uname . "' && Pass = '". $password."'";
    $db = getConnexion();
    try{

        $query=$db->prepare($sql);
        $query->execute();
        $count=$query->rowCount();
        if($count==1){
             header('Location:table.php');

        }
        else {echo "Uncorrect password or ID";}

    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
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
    <link href="css/login.css" rel="stylesheet" />
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
                <p class="navbar-brand">Connect admin</p> 
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="dataTables-example">
                                        <div class="wrapper fadeInDown">
                                                  <div id="formContent">
                                                    <!-- Tabs Titles -->
                                                    <h2 class="active"> Sign In </h2>
                                                    <!-- Login Form -->
                                                    <form method="POST" action="#">
                                                      <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
                                                      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                                                      <input type="submit" class="fadeIn fourth" value="Log In">
                                                    </form>
                                                  </div>
                                                </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
         <!-- /. PAGE WRAPPER  -->
     </nav></div><!-- /. WRAPPER  -->
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
