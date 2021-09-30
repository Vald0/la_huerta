<?php
require('fpdf/fpdf.php');
$productos = ($_GET["objectTicket"]);
$obj = json_decode($productos, true);


$pdf = new FPDF();
$pdf->AddPage();
$str = iconv('UTF-8', 'windows-1252', $str);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Esto es editable');

foreach ($obj as $k=>$v){
    $line = $k*13;
$pdf->Cell(10,$line,$obj[$k]['nombre']." $".$obj[$k]['precio']." /".$obj[$k]['unidad']); // etc.
}
$pdf->Output();
?>
