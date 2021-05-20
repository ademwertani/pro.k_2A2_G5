
<?PHP
include "C:/xampp/htdocs/pro.k/entity/packet.php";
include "C:/xampp/htdocs/pro.k/controllers/pack_bd.php";

if (!empty($_POST['ReferencePack']) and !empty($_POST['identifiantpack']) and !empty($_POST['Datedebutpack'])  and isset($_POST['ajouter'])){
	

	
	$packet=new packet($_POST['ReferencePack'],$_POST['identifiantpack'],$_POST['Datedebutpack'],$_POST['Datefinpack'],$_POST['prix'],$_POST['image']);
	$pack_bd=new packet_bd();

    $pack_bd->ajouterpack($packet);

	header('Location: pack.php');
}
	else echo("Verifier les Champs! ");
?>
