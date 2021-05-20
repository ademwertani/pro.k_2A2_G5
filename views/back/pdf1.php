<?php
  include '../pdf2/plantilla.php';
  include "../../controllers/clientc.php";
  require '../pdf2/conexion.php'; 

  
  
  $query = "SELECT * FROM client ";
  $resultado = $mysqli->query($query); 
  $clientc = new clientc();
  $client = $clientc->afficherclient();
    $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();
  
  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',12);
  
  $pdf->Cell(30,6,'ID du client',1,0,'C',1);
  $pdf->Cell(20,6,'Nom',1,0,'C',1);
  $pdf->Cell(20,6,'Prenom',1,0,'C',1); 
  $pdf->Cell(60,6,'mailclient',1,0,'C',1); 
  $pdf->Cell(42,6,'tel',1,0,'C',1); 
  $pdf->Cell(20,6,'adresse',1,1,'C',1); 
  
  $pdf->SetFont('Arial','',10);
  
  while($row = $resultado->fetch_assoc())
  {
    $pdf->Cell(30,20,$row['idc'],1,0,'C');
    $pdf->Cell(20,20,utf8_decode($row['nom']),1,0,'C'); 
    $pdf->Cell(20,20,utf8_decode($row['prenom']),1,0,'C'); 
    $pdf->Cell(60,20,utf8_decode($row['mailclient']),1,0,'C'); 
    $pdf->Cell(42,20,utf8_decode($row['tel']),1,0,'C'); 
    $pdf->Cell(20,20,utf8_decode($row['adresse']),1,1,'C'); 
    
   // $pdf->Cell(20,20,utf8_decode($pdf->Image("../image/".$row['image'],null,null,15,15)));
  

  }

  















  $pdf->Output();
?>