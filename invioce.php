<?php
include('db.php');

require('fpdf182/fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(54,5, 'Reference Code', 1,0, 'C');
$pdf->Cell(54,5, '026ERT', 1,0, 'C');
$pdf->Cell(25,5, 'Date', 1,0, 'C');
$pdf->Cell(65,5,'2020/07/25 12:20:45 PM',1,1);

$pdf->Cell(54,5, ':Amount', 1,0);
$pdf->Cell(54,5, ':2435', 1,0);
$pdf->Cell(25,5, ':Channel', 1,0);
$pdf->Cell(65,5,':WEB',1,1);

$pdf->Cell(54,5,':Status',1,0);
$pdf->Cell(54,5,':Complete',1,1);

$pdf->Line(10, 30, 207, 30);

$pdf->Ln(10);
$pdf->Cell(69, 5,'Product id', 1, 0);
$pdf->Cell(55, 5,'4632-6784', 1, 1);

$pdf->Cell(69, 5,'Tax Amount', 1, 0);
$pdf->Cell(55, 5,'0', 1, 1);

$pdf->Cell(69, 5,'Product Service Charge', 1, 0);
$pdf->Cell(69, 5,'0', 1, 1);

$pdf->Cell(69, 5,'Product Delivery  Charge', 1, 0);
$pdf->Cell(69, 5,'0', 1, 1);

$pdf->Line(10, 60, 200, 60);

$pdf->Ln(10);//Line break
$pdf->Cell(60, 5, 'Paid by', 1,0);
$pdf->Cell(69, 5, 'Bassi Eno', 1,1);

$pdf->Line(155, 75, 195, 75);
$pdf->Ln(10);//Line break
$pdf->Cell(130, 5, '', 1,0);
$pdf->Cell(60, 5, 'Signature', 1,1, 'C');


$pdf->Output();
?>