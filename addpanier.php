<?php
require '_header.php';
$json =array('error'=>true);
if(isset($_GET['id'])){
$product=$DB->query('SELECT id FROM products WHERE id=:id', array('id' => $_GET['id']));
if (empty($product)) {
  $json['message'] = "Ce produit n'existe pas ";
}
$panier->add($product[0]->id) ;
  $json['error']=false;
  $json['total']=$panier->total();
  $json['count']=$panier->count();
  $json['message'] = 'le produit a bien été ajouté a votre panier';
}else {
  $json['message'] ="vous n'avez pas sélectionné de produit pour ajouter au panier";
}
echo json_encode($json);
?>