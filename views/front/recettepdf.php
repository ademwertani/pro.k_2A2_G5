<?php
include "../../controllers/recettecontroller.php"; 
include "../../entity/recette.php";

require('pdf/fpdf.php');


if (isset($_POST['id'])) {

    $recettec = new recettecontroller();
    $result = $recettec->findById($_POST['id']);

    foreach ($result as $row) {
     $id = $row['id'];
       $nom = $row['nom'];
        $description = $row['description'];
         $categorie = $row['nom_cat'];
        $idc=$row['idc'];
         $img=$row['image'];
    }
}



$pdf = new FPDF();
$pdf->AddPage('L','A4',0);
$pdf->Image('prok.png',10,6);
$pdf->SetFont('Arial','B',14); 
$pdf->Ln(40); 

$html = 'w aa';

$pdf->setFont('Times','B',12); 

$pdf->Cell(50,10,'Nom',1,0,'C');
$pdf->Cell(50,10,'Categorie',1,0,'C');
$pdf->Cell(70,10,'description',1,0,'C');

$pdf->Ln(); 

$pdf->Cell(50,10,$nom,0,0,'C');
$pdf->Cell(50,10,$categorie,0,0,'C');
$pdf->MultiCell(70,10,$description,0);

$pdf->Ln(); 


















$pdf->Output();



?>
