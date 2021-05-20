<?php
    include "header.php";
?>

	<div class="container">
    <h1>Mes Commandes</h1>
	<div class="table-responsive">
    <table  class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Id Commande</th>
                  <th>Prix Total</th>
				  <th>Date de Création</th>
                  <th>Date de Modification</th>
                    <th>Etat</th>
        </tr>
    </thead>
    <tbody>
              <?php
              include "../../core/panierC.php";
				$panierC=new cart();
				$listeCommande=$panierC->afficherCommande();
              foreach ($listeCommande as $row) {
			  if( $row['customer_id'] == $_SESSION['id'] )
			  {

              ?>
			  
              <tr>
                  <th><?php echo $row['id']; ?></th>
                  <th><?php echo $row['total_price']; ?> Dt</th>
                  <th><?php echo $row['created']; ?></th>
                  <th><?php echo $row['modified']; ?></th>
				  <?php if ($row['status'] == 1 ):?>
                  <th>En cours </th>
				  <?php endif;?>
				  <?php if ($row['status'] == 2 ): ?>
				  <th><?php echo 'terminé'; ?></th>
				  
					<?php endif;?>
              </tr>
			 
                  <?php
			  }
              }
              ?>
              </tbody>
    
    </table>
	</div>
	</div>
	</div>
<?php
    include "footer.php";
?>