<?php
include "../../controllers/config.php";
$db = config::getConnexion();
 
$qry = "SELECT recette.id, recette.nom, recette.description, recette.image, recette.idc, categorie.nom AS nom_cat
FROM recette LEFT JOIN categorie
    ON categorie.id = recette.idc";
    $query=$db->prepare($qry); 
    $query->execute();  
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
 
    
 
 
 
require('pdf/fpdf.php');
 
$pdf = new FPDF();
$pdf->AddPage('L','A4',0);
$pdf->Image('prok.png',10,6);
$pdf->SetFont('Arial','B',14); 
$pdf->Cell(276,5,'Liste des recettes',0,0,'C');
$pdf->Ln(40); 
 
$html = 'w aa';
 
$pdf->setFont('Times','B',12); 
$pdf->Cell(50,20,'id',1,);
$pdf->Cell(50,20,'Nom',1);
$pdf->Cell(50,20,'Categorie',1);
$pdf->Cell(100,20,'description',1);
 
$pdf->Ln(); 
foreach ($result as $r)
{
$pdf->Cell(50,20, $r['id'],1);
$pdf->Cell(50,20,$r['nom'],1);
$pdf->Cell(50,20,$r['nom_cat'],1);
$pdf->MultiCell(100,20,$r['description'],1);
$pdf->Ln();
 
 
}
 
 
 
 
 
 
 
 
 
 
$pdf->Output();
 
 
 
?>
