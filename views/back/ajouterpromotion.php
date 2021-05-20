
<?PHP
include "C:/xampp/htdocs/pro.k/entity/promotion.php";
include "C:/xampp/htdocs/pro.k/controllers/promo_bd.php";

if (!empty($_POST['Reference']) and !empty($_POST['idpromo']) and !empty($_POST['date_debut'])  and isset($_POST['ajouter'])){
	

	
	$promotion=new promotion($_POST['idpromo'],$_POST['Reference'],$_POST['date_debut'],$_POST['date_fin'],$_POST['pourcentage'],$_POST['identifiantpack']);
	$promo_bd=new promotion_bd();

    $promo_bd->ajouterpromotion($promotion);

	header('Location: promo.php');
}
	else echo("Verifier les Champs! ");
?>
