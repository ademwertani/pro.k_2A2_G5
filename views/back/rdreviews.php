<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php

include "../../controllers/commentairecontroller.php";

$commentaire1 = new commentairecontroller();
$commentaireC = $commentaire1->afficherCommentaire();
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
  <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Pro.K</a>
      </div>
      <div style="
            color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;
          ">
        Last access : 30 May 2014 &nbsp;
        <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a>
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
            <a href="addcategories.html"><i class=" fa fa-edit fa-2x "></i>
              Categories </a>

          </li>
      </div>
    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <h2>Tabs & Panels</h2>
            <h5>Welcome Oumayma Cherif , Love to see you back.</h5>
          </div>
        </div>
        <!-- /. ROW  -->
        
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <tr>

              <th>nom</th>
              <th>mail </th>
              <th>Commentaire</th>
              <th> supprimer </th>

            </tr>


            <?php foreach ($commentaireC as $l) { ?>
            <tr>
              <td>
                <?php echo $l['nom'] ?>
              </tdp>
              <td>  <?php echo $l['mail'] ?></td>
                
            

            <td><?php echo $l['Commentaire'] ?></td>

              <td>
                <form method="POST" action="supprimercommentaire.php">
                  <input type="submit" name="supprimer" value="supprimer"  class="btn btn-danger"
                    onclick="validateSubmit()">
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


            </tr>
            <?php } ?>

          </table>
        </div>

      </div>






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