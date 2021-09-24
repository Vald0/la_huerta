<?php
require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Esto es editable');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,20, $_GET["objectTicket"]);
$pdf->Output();
?>