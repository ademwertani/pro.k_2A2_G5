<?php
require_once "connexion.php";
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();


$pdf->Image('logo.png', 10, 5, 80, 20);

// Saut de ligne
$pdf->Ln(18);
// code for print Heading of tables
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0, 10, 'Liste des Produits', 'TB', 1, 'C');
$ret ="SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='projetweb' AND `TABLE_NAME`='produit'";
$query1 = $dbh -> prepare($ret);
$query1->execute();
$header=$query1->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query1->rowCount() > 0)
{
foreach($header as $heading) {
foreach($heading as $column_heading)
$pdf->Cell(40,12,$column_heading,2);
}}
//code for print data
$sql = "SELECT * from  produit ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) {
$pdf->SetFont('Arial','',12);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1);
} }
$pdf->Output();
?>