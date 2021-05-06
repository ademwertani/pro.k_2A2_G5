<?php require 'header.php';
require_once 'commande.php' ;
require_once 'commandee.php';
$commandee =new commandee();

    if ($panier->total() !=0 ) {
       
    $commande=new commande(date("Y/m/d"),number_format($panier->total(),0,',',''));

    $commandee->ajoutercommande($commande);

    header('Location:recipes.php'); 
}
?>     

         <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h2>Panier</h2>
                        </div> 
                    <form method="POST" action="panier.php">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Produit</th>
                                            <th>Quantité</th>
                                            <th>Prix</th>
                                            <th>Prix avec TVA</th>
                                            <th>Total par produit</th>
                                            <th>Action</th>
                                           

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $ids=array_keys($_SESSION['panier']);
                                        if (empty($ids)) {
                                            $products = array();
                                        }
                                        else {
                                        $products= $DB->query('SELECT * FROM products WHERE id IN ('.implode(',', $ids).')'); }
                                        foreach ($products as $product) :                                       
                                        ?>
                                        <tr>
                                            <td><img src="images/<?= $product->id; ?>.png" width="50" height="50" alt="" />  </td>
                                            <td><input type="number"  name="panier[quantity][<?= $product->id; ?>]" min="0" max="100" step="1" value="<?= $_SESSION['panier'][$product->id]; ?>"></td>
                                            <td> <h4><?= number_format($product->price,2,',',''); ?> DT</h4> </td>
                                            <td> <h4><?= number_format($product->price * 1.12 ,2,',',''); ?> DT</h4> </td>
                                            <td><h4><?= number_format($product->price * $_SESSION['panier'][$product->id],2,',',''); ?> DT</h4>
                                            </td>
                                            <td><a href="panier.php?delPanier=<?=$product->id;?>"><img src="images/trash.png" width="50" height="50"></a></td>

                                        </tr>
                                    <?php endforeach; ?>                                   
                                
                                         
                                <input type="submit"  class="btn btn-primary" value="Recalculer">
                                <input type="submit" class="btn btn-primary" name="save" value="Passer commande">Passer commande</button>
                                    </tbody>

                                </table>
                               <h3 >Total :</h3><h2><?= number_format($panier->total(),2,',',''); ?> DT</h2>
                            </div>
                            <?php
if(isset($_POST['mailform'])) {

$header="MIME-Version: 1.0\r\n";
$header.='From:"PRO.K"'."\n";
$header.='Content-Type:text/html; charset="utf-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
    <body>
        <div align="center">
            <img src="images/logo.png"/>
            <br />
            Merci pour votre confiance !  
        </div>
    </body>
</html>
';

mail($_POST['adresse'], "Votre commande a bien été passé!", $message, $header);
}
?>
  <input type="text" name="adresse" placeholder="exemple@gmail.com">
    <input type="submit" class="btn btn-primary" value="Recevoir un mail !" name="mailform" />
                 </div>
                    </form>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
             
                <div class="col-md-6">
             
                </div>
            </div>
<?php require 'footer.php'; ?>                